<?php
switch($page){
    case 'all':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all2':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 16,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all3':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 32,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all4':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 48,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all5':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 64,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all6':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 80,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all7':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 96,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all8':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 112,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'all9':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre ORDER BY m.year DESC LIMIT 128,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'Action':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 1 LIMIT 0,8";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 1";
        break;
    case 'Action8':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 1 LIMIT 56,8";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 1";
        break;
    case 'Adventure':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 2 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 2";
        break;
    case 'Animation':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 3 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 3";
        break;
    case 'Comedy':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 4 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 4";
        break;
    case 'Drama':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 5 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 5";
        break;
    case 'Fantasy':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 6 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 6";
        break;
    case 'Horror':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 7 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 7";
        break;
    case 'Musical':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 8 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 8";
        break;
    case 'Romance':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 9 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 9";
        break;
    case 'Sci Fi':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 10 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 10";
        break;
    case 'Thriller':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 11 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 11";
        break;
    case 'War':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 12 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 12";
        break;
    case 'Western':
        $query = "SELECT *, g.name AS gName, m.name AS mName FROM movies m INNER JOIN genres g ON m.genre_id = g.id_genre WHERE m.genre_id = 13 LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies WHERE genre_id = 13";
        break;
    case 'gallery':
        $query = "SELECT * FROM movies LIMIT 0,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery2':
        $query = "SELECT * FROM movies LIMIT 16,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery3':
        $query = "SELECT * FROM movies LIMIT 32,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery4':
        $query = "SELECT * FROM movies LIMIT 48,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery5':
        $query = "SELECT * FROM movies LIMIT 64,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery6':
        $query = "SELECT * FROM movies LIMIT 80,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery7':
        $query = "SELECT * FROM movies LIMIT 96,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery8':
        $query = "SELECT * FROM movies LIMIT 112,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    case 'gallery9':
        $query = "SELECT * FROM movies LIMIT 128,16";
        $rowQuery = "SELECT COUNT(*) AS rowCount FROM movies";
        break;
    }
?>