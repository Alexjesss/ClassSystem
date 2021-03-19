<?php

class ClassLoader extends database
{

    public function getClassInfo($id): array
    {
        $pdo = $this->openConnection()->prepare('select className,class.classID from class where classID = :id');
        $pdo->bindValue(':id', $id);
        $pdo->execute();
        return $pdo->fetch();
    }

    public function getClassesInfo(): array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select className, classID, location from class');
        $handle->execute();
        return $handle->fetchAll();

    }

    public function setClassesInfo($classID, $className, $location, $teacherID)
    {
        $pdo = $this->openConnection()->prepare('insert into class (classID, className, location, teacherID) values (:classID,:className,:location, :teacherID)');
        $pdo->execute([$classID, $className, $location, $teacherID]);
    }

    public function edit($id)
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('update class set firstName = :firstName, lastName = :lastName,email = :email, className = :className where teacherID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function delete($id): void
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('delete from class where classID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }


}
