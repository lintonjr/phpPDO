<?php

class ServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function index()
    {

    }

    public function save()
    {

    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}