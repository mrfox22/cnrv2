<?php
namespace core\base;

class Controller
{
    /**
     * Generate a link URL for a named route
     *
     * @param string $route  Named route to generate the link URL for
     * @param array  $params Any parameters required for the route
     *
     * @return string  URL for the route
     */
    static function linkTo($route, $params=[])
    {
        $router = $GLOBALS['router'];
        return $router->generate($route, $params);
    }
}
