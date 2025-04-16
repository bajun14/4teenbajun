<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace GPBMetadata\Google\Rpc;

class ErrorDetails
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
google/rpc/error_details.proto
google.rpc"�
	ErrorInfo
reason (	
domain (	5
metadata (2#.google.rpc.ErrorInfo.MetadataEntry/
MetadataEntry
key (	
value (	:8";
	RetryInfo.
retry_delay (2.google.protobuf.Duration"2
	DebugInfo
stack_entries (	
detail (	"y
QuotaFailure6

violations (2".google.rpc.QuotaFailure.Violation1
	Violation
subject (	
description (	"�
PreconditionFailure=

violations (2).google.rpc.PreconditionFailure.Violation?
	Violation
type (	
subject (	
description (	"�

BadRequest?
field_violations (2%.google.rpc.BadRequest.FieldViolation}
FieldViolation
field (	
description (	
reason (	7
localized_message (2.google.rpc.LocalizedMessage"7
RequestInfo

request_id (	
serving_data (	"`
ResourceInfo
resource_type (	
resource_name (	
owner (	
description (	"V
Help$
links (2.google.rpc.Help.Link(
Link
description (	
url (	"3
LocalizedMessage
locale (	
message (	Bl
com.google.rpcBErrorDetailsProtoPZ?google.golang.org/genproto/googleapis/rpc/errdetails;errdetails�RPCbproto3'
        , true);

        static::$is_initialized = true;
    }
}

