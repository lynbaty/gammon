<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository implements ProjectInterface
{
    public function getAll()
    {
        return Project::all();
    }

    public function getById($id)
    {
        return Project::Find($id);
    }

    public function create(array $data)
    {
        return Project::Create($data);
    }

    public function update($id, array $data)
    {
        return Project::Find($id)->Update($data);
    }

    public function delete($id)
    {
        return Project::Destroy($id);
    }
}
