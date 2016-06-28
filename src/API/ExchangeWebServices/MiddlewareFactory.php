<?php

namespace garethp\ews\API\ExchangeWebServices;

use garethp\ews\API\MiddlewareRequest;
use garethp\ews\API\MiddlewareResponse;
use garethp\ews\API\Type;
use garethp\ews\API\ExchangeWebServices;
use garethp\ews\API\Type\FindFolderParentType;
use garethp\ews\API\Type\FindItemParentType;

class MiddlewareFactory
{
    public static function getSoapCall()
    {
        return function (MiddlewareRequest $request) {
            $client = $this->getClient();
            $response = $client->__call($request->getName(), $request->getArguments());
            $response = MiddlewareResponse::newResponse($response);

            return $response;
        };
    }

    public static function getTypeToXMLObject()
    {
        return function (MiddlewareRequest $request, callable $next) {
            if ($request->getRequest() instanceof Type) {
                $request->setRequest($request->getRequest()->toXmlObject());
            }

            return $next($request);
        };
    }

    public static function getStripSyncScopeForExchange2007()
    {
        return function (MiddlewareRequest $request, callable $next) {
            $options = $request->getOptions();
            $version2007SP1 = ($options['version'] == ExchangeWebServices::VERSION_2007
                || $options['version'] == ExchangeWebServices::VERSION_2007_SP1);

            $requestObj = $request->getName();

            if ($request->getName() == "SyncFolderItems" && $version2007SP1 && isset($requestObj->SyncScope)) {
                unset($requestObj->SyncScope);
                $request->setRequest($requestObj);
            }

            return $next($request);
        };
    }

    public static function getProcessResponse()
    {
        return function (MiddlewareRequest $request, callable $next) {
            $response = $next($request);

            $response->setResponse($this->processResponse($response->getResponse()));

            return $response;
        };
    }

    public static function getAddLastRequestToPagedResults()
    {
        return function (MiddlewareRequest $request, callable $next) {
            $response = $next($request);

            $responseObject = $response->getResponse();
            if (($responseObject instanceof FindItemParentType
                    || $responseObject instanceof FindFolderParentType)
                && !$responseObject->isIncludesLastItemInRange()) {
                $responseObject->setLastRequest($request->getRequest());
                $response->setResponse($responseObject);
            }

            return $response;
        };
    }
}