<?php
/**
 * Created by PhpStorm.
 * User: Danh Nguyen
 * Date: 3/12/2019
 * Time: 5:20 PM
 */


namespace App\Repositories;

interface RepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);
}