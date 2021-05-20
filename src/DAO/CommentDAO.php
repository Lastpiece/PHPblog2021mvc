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
            $sql = 'SELECT * FROM commentaire ORDER BY created_at DESC';
            $req = $this->createQuery($sql); 
            $result = $req->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row){
                $id = $row['id'];
                $comments[$id] = $this->buildComment($row);
            }
            return $comments;
        }

        public function getCommentsFromArticle($articleId){
            $comments = [];
            $sql = 'SELECT * FROM commentaire WHERE id_article = ? ORDER BY created_at DESC';
            $result = $this->createQuery($sql, [$articleId])->fetchAll();
            foreach ($result as $row){
                $commentsId = $row['id'];
                $comments[$commentsId] = $this->buildComment($row);
            }

            return $comments;
        }
    }