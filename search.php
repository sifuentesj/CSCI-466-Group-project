<html>
<head>
    <title>CSCI 466 Group Project</title>
</head>

<body>

<form action="search.php"   method="POST">
<label>Search by Artist Name</label>
<input type= "text" name="searchArtist"/>
<input type="submit" name="submitArtist" value=">>" />




<label>Search by Song</label>
<input type= "text" name="searchSong"/>
<input type="submit" name="submitSong" value=">>" />
</form>



</body>
</html>

<?php
include 'dbconnection.php';
include 'library.php';

if(isset($_POST["submitArtist"])){
 $artist = $_POST["searchArtist"];
 $prepared = $pdo->prepare('SELECT DISTINCT artistName, fileName, version FROM artist, karaokeFile , song WHERE karaokeFile.artistId = artist.artistId  and karaokeFile.songID = song.songID and artist.artistName = ?');

 $prepared->execute(array($artist));
 $rows = $prepared->fetchALL(PDO::FETCH_ASSOC);
 draw_table($rows);
}
if(isset($_POST["submitSong"])){
 $song = $_POST["searchSong"];
 $prepared = $pdo->prepare('SELECT DISTINCT artistName, fileName, version FROM artist, karaokeFile , song WHERE karaokeFile.artistId = artist.artistID and karaokeFile.songID = song.songID and song.songTitle = ?');


 $prepared->execute(array($song));
 $rows = $prepared->fetchALL(PDO::FETCH_ASSOC);
 draw_table($rows);

}
?>

