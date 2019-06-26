<?php

class Pagination
{

    private $html;
    private $limit;
    private $totalRecords;
    private $param;
    private $totalPages;

    public function Setup($limit, $param, $totalRecords)
    {
        $this->limit = $limit;
        $this->totalRecords = $totalRecords;
        $this->param = get($param) && is_numeric(get($param)) ? get($param) : 1;
        $this->totalPages = ceil($totalRecords / $limit);
        $start = ($this->param * $this->limit) - $this->limit;

        return [
            'start' => $start,
            'limit' => $this->limit
        ];
    }

    public function View($url, $class = ' active')
    {
        if ($this->totalRecords > $this->limit) {
            for ($i = $this->param - 5 ; $i < $this->param + 5 + 1; $i++){
                if($i > 0 && $i <= $this->totalPages ){
                    $this->html .= '<li class="';
                    $this->html .=  ($i == $this->param ? $class : NULL );
                    $this->html .= '"><a href="'.str_replace('[page]',$i,$url).'">'.$i.'</a>';
                }
            }
            return $this->html;
        }
    }

}