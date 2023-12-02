@extends('layout.default')
@section('title', 'Home')

@section('content')
    <div class="landing-feature landing-coin-price bt-none" style="padding: 10px 0 80px">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="border-bottom: 1px solid white">
                    <h2 class="p-0 m-0 my-2">All Transaction</h2>
                </div>
                <table class="table table-dark align-middle mb-0 bg-dark">
                    <thead class="bg-dark">
                        <tr>
                            <th scope="col">Plate Number</th>
                            <th scope="col">Vehicle</th>
                            <th scope="col">In Time</th>
                            <th scope="col">Out Time</th>
                            <th scope="col">Price</th>
                            <th scope="col">Operator In</th>
                            <th scope="col">Operator Out</th>
                            <th scope="col">Paid</th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($results) > 0)
                        @foreach ($results as $oneitem)
                            <tr>
                                <td>
                                    {{$oneitem->getPlatenumber()}}
                                </td>
                                <td>
                                    {{$oneitem->getVehicletype()}}
                                </td>
                                <td>
                                    {{$oneitem->getIntime()}}
                                </td>
                                <td>
                                    @if($oneitem->getIsdone() == true)
                                        {{$oneitem->getOuttime()}}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                   @if($oneitem->getIsdone() == true)
                                        {{$oneitem->getPrice()}}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    {{$oneitem->getOperatorin()}}
                                </td>
                                <td>
                                    @if($oneitem->getOperatorout() != '')
                                    {{$oneitem->getOperatorout()}}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if($oneitem->getIsdone() == true)
                                    <i class="bi bi-check-circle-fill"></i>
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                            <th scope="row" colspan="4">No Token Present</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="new-order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark text-light">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Input New Token</h1>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="text" id="codeinput" class="form-control" placeholder="Token Code (BTC/ETH)" aria-label="Token Code (BTC/ETH)" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="nameinput" class="form-control" placeholder="Token Name" aria-label="Token Code (BTC/ETH)" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="descinput" class="form-control" placeholder="Token Description" aria-label="Token Description" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="file" id="logoinput" class="form-control"/>
                </div>
                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="input-token" disabled>Input</button>
            </div>
          </div>
        </div>
      </div> --}}

    {{-- <script>
        var currentURL = window.location.href
        File.prototype.convertToBase64 = function(callback){
                var reader = new FileReader();
                reader.onloadend = function (e) {
                    console.log(e.target.result)
                    callback(e.target.result, e.target.error);
                    
                };   
                reader.readAsDataURL(this);
        };

        var tokensName = [];
        @foreach ($token as $onetoken)
            tokensName.push('{{ $onetoken->getTokenid() }}');
        @endforeach

        var theBase64 = "" 
        var button = document.getElementById('input-token');
        button.addEventListener('click', function(e) {
            this.disabled = true;

            var xhr = new XMLHttpRequest();
            
            var data = "token_code=" + codeinput.value + "&token_name=" + nameinput.value + "&token_desc=" + descinput.value + "&token_logo=" + theBase64;
            
            xhr.open("POST", "/admin/inputtoken", false);

            var csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
            var csrfToken = csrfTokenMeta.getAttribute('content');

            xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        location.replace(currentURL)
                    } else if (xhr.status === 400) {
                        // alert("FAILED TO SEND MENU ORDER " + newObject["menu_id"] + ": " + xhr.status)
                        location.replace("/signout")
                    } else {
                        location.replace(currentURL)
                    }
                }
            };

            xhr.send(data);
        })

        const logoinput = document.getElementById('logoinput');
        const codeinput = document.getElementById('codeinput');
        const nameinput = document.getElementById('nameinput');
        const descinput = document.getElementById('descinput');
        var isFound = false;
        codeinput.addEventListener('keyup', function (e) {
            isFound = tokensName.includes(codeinput.value);
            
            if (codeinput.value.length < 1 || nameinput.value.length < 1 || logoinput.value == "" || isFound == true) {
                document.getElementById('input-token').disabled = true
            } else {
                document.getElementById('input-token').disabled = false
            }
        });
        nameinput.addEventListener('keyup', function (e) {
            if (codeinput.value.length < 1 || nameinput.value.length < 1 || logoinput.value == "" || isFound == true) {
                document.getElementById('input-token').disabled = true
            } else {
                document.getElementById('input-token').disabled = false
            }
        });
        logoinput.addEventListener('change', function (e) {
            var reader = new FileReader();
            var baseString;
            reader.onloadend = function () {
                baseString = reader.result;
                theBase64 = baseString
            };
            reader.readAsDataURL(logoinput.files[0]);
            if (codeinput.value.length < 1 || nameinput.value.length < 1 || logoinput.value == "" || isFound == true) {
                document.getElementById('input-token').disabled = true
            } else {
                document.getElementById('input-token').disabled = false
            }
        });


        
    </script> --}}
@endsection
