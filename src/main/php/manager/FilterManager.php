<?php
namespace prophet;

use prophet\core\Filter;

class FilterManager
{
    private $filtersNodes = [];
    
    function addFilter(Filter $filter, string $classname, array $urlPatterns, string $description) {
        $filtersNodes[] = new Node($filter, $classname, $urlPatterns, $description);
    }
    
    function interceptRequest(GenericRequest $request, GenericResponse $response) {
        foreach ($filtersNodes as $node) {
            $is_uri_valid = MappingPattern::checkURI($node->getPatterns(), $request.getRequestedPath());
            if($is_uri_valid) 
                invokeFilter($node->getObject(), $request, $response);
        }
    }
    
    private function invokeFilter(Filter $filter, GenericRequest $request, GenericResponse $response) {
        $filter->doFilter($request, $response);
    }
    
    function getFilters(): array {
        $array_of_filters = [];
        foreach ($this->filtersNodes as $node) {
            $array_of_filters[] = $node->getObject();
        }
        return $array_of_filters;
    }
}

