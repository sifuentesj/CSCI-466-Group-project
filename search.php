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
<script>
    let thetable = document.getElementById('drawnTable').getElementsByTagName('tbody')[0];
      for (let i = 0; i < thetable.rows.length; i++)
                {
                   thetable.rows[i].onclick = function()
                    {
                        TableRowClick(this);
                    };
                }
            function TableRowClick(therow) {
                let msg = therow.cells[0].innerHTML+'*'+therow.cells[1].innerHTML+'*'+therow.cells[2].innerHTML;
                alert(msg);
            };
    
</script>
<script>
function Queue(){
   freeQueue = [];
   this.print = function(){
        console.log(freeQueue);
     };
  this.enqueue = function(element){
    freeQueue.push(element);
   };
   this.dequeue = function(){
  return freeQueue.shift();
  };
 this.front= function(){
  return freeQueue[0]
  };
 this.size = function(){
    return freeQueue.length;
};
}
</script>
<form action=""   method="POST">
<label>Free Queue</label>
<input type="submit" name="submitQueue" value="Free Queue" />

<label>Paid Queue</label>
<input type="submit" name="submitPaid" value="Paid Queue" />
</form>


</body>
</html>


