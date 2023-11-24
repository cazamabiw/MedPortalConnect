<?php
/**
 * Description of newsDAO
 *
 * @author Pawinee Mahantamak
 */
require_once('abstractDAO.php');
require_once('../model/news.php');

class NewsDAO extends abstractDAO {

    public function getAllNews() {
        $newsData = array();

        if (!$this->mysqli->connect_errno) {
            $query = "SELECT * FROM news order by newsdate desc";
            $result = $this->mysqli->query($query);

            while ($row = $result->fetch_assoc()) {
                $newsItem = new News(
                    $row['id'],
                    $row['title'],
                    $row['imageUrl'],
                    $row['content'],
                    $row['newsdate']
                );

                $newsData[] = $newsItem;
            }
        }

        return $newsData;
    }
} 
?>
