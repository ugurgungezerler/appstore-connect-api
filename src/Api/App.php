<?php


namespace MingYuanYun\AppStore\Api;


class App extends AbstractApi
{
    public function all(array $params = [], $id = null)
    {
        if (!$id) {
            return $this->get("/apps", $params);
        }
        return $this->get("/apps/{$id}", $params);
    }

    public function show($id, array $params = [])
    {
        return $this->get("/apps/{$id}", $params);
    }
}
