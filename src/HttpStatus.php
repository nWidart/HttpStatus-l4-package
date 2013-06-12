<?php

App::error(function (Symfony\Component\HttpKernel\Exception\HttpException $e, $code)
{
    if ( ! Config::get('app.debug') )
    {
        switch ($code)
        {
            case 403:
                return Response::make(View::make(Config::get('httpstatus::views.403')), 403);
            case 500:
                return Response::make(View::make(Config::get('httpstatus::views.500')), 500);
            default:
                return Response::make(View::make(Config::get('httpstatus::views.404')), 404);
        }
    }
}
);

App::down(function()
{
    return Response::make(View::make(Config::get('httpstatus::views.503')), 503);
}
);
