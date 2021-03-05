<?php namespace App\GroupPermission\Entity;

use App\Database\Entity\Entity;

class GroupPermissionEntity extends Entity
{

    private $id;
    private $group_id;
    private $permission_id;
    private $created_at;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
    }

    public function getPermissionId()
    {
        return $this->permission_id;
    }

    public function setPermissionId($permission_id)
    {
        $this->permission_id = $permission_id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

}