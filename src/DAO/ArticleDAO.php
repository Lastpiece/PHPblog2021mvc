<?php
namespace App\src\DAO;

use PDO;
use App\src\models\Article;

    class ArticleDAO extends DAO
    {
        //! PARTIE GESTION D'ARTICLES DANS LA BDD
        public function buildArticle($row)
        {
            return new Article($row);
        }

        public function getAllArticles()
        {
            $articles = [];
            $sql = 'SELECT * FROM article ORDER BY created_at DESC';
            $req = $this->createQuery($sql);
            // $req = $this->db->prepare($sql);
            // $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                $id = $row['id'];
                $articles[$id] = $this->buildArticle($row);
            }


            return $articles;
        }
    }
