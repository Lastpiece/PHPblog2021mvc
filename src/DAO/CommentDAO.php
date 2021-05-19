<?php
namespace App\src\DAO;

use PDO;
use App\src\models\Comment;

    class CommentDAO extends DAO{
        //! PARTIE GESTION DE COMMENTAIRE DANS LA BDD
        public function buildComment($row){
            return new Comment($row);
        }

        public function getAllComments(){
            $comments =[];
            $sql = 'SELECT * FROM commentaire';
            $req = $this->createQuery($sql); 
            $result = $req->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row){
                $id = $row['id'];
                $comments['id'] = $this->buildComment($row);
            }
            return $comments;
        }
    }