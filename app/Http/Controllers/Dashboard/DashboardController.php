<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\ErrorCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Grpc\ChannelCredentials;
use Illuminate\Support\Facades\Log;
use WebEDC\EDCServiceClient;
use WebEDC\SeeAllTransactionRequest;

class DashboardController extends Controller
{
    function showPage(Request $request)
    {
        $grpcClient = new EDCServiceClient(webClientGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        // Prepare the request

        $signinRequest = new SeeAllTransactionRequest();
        $signinRequest->setToken($request->session()->get('token'));

        list($result, $status) = $grpcClient->DoSeeAllTransaction($signinRequest)->wait();

        $grpcHitStatus = $status->code;
        Log::debug("Login grpcHitStatus: ".$grpcHitStatus);

        if ($grpcHitStatus === 0) {
            $respStatus = $result->getStatus();
            Log::debug('Login respStatus: '.$respStatus);

            if ($respStatus == ErrorCode::ErrorSuccess) {
                // Call grpc success - set session data
                $request->session()->put('token', $result->getJwt());
                return view('pages.dashboard.dashboard')->with('results', $result->getResults());
            } else if ($respStatus == ErrorCode::ErrorWebInvalidSession) {
                return redirect('/signout');
            }
        } else {
            // Failed to call grpc
            // Remove sessionId from the session
            $request->session()->remove('token');

            return redirect('/')->with('message', 'Failed to Get transaction. Server not available. Please try again later');
        }
    }
}
