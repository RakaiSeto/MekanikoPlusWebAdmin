<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: edcCoreFunction.proto

namespace GPBMetadata;

class EdcCoreFunction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
edcCoreFunction.protoWebEDC"2
LoginRequest
username (	
password (	"=
LoginResponse
status (	
jwt (	
isadmin (")
SeeAllTransactionRequest
token (	"�
SeeAllTransactionList
transactionid (	
platenumber (	
vehicletype (	
intime (	
outtime (	
price (
edcidin (	
edcidout (	

operatorin	 (	
operatorout
 (	
isdone ("h
SeeAllTransactionResponse
status (	
jwt (	.
results (2.WebEDC.SeeAllTransactionList2�

EDCService8
DoLogin.WebEDC.LoginRequest.WebEDC.LoginResponse" \\
DoSeeAllTransaction .WebEDC.SeeAllTransactionRequest!.WebEDC.SeeAllTransactionResponse" BZ.bproto3'
        , true);

        static::$is_initialized = true;
    }
}

