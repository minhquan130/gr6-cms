<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/datetime.proto

namespace GPBMetadata\Google\Type;

class Datetime
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
�
google/type/datetime.protogoogle.type"�
DateTime
year (
month (
day (
hours (
minutes (
seconds (
nanos (/

utc_offset (2.google.protobuf.DurationH *
	time_zone	 (2.google.type.TimeZoneH B
time_offset"\'
TimeZone

id (	
version (	Bi
com.google.typeBDateTimeProtoPZ<google.golang.org/genproto/googleapis/type/datetime;datetime��GTPbproto3'
        , true);

        static::$is_initialized = true;
    }
}

