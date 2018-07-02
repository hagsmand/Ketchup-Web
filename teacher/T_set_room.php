
<html>
<style>
    body{background-image: url("2.jpg");
    background-repeat: no-repeat;
        background-position: center;

}
    p1{

        color: #f44336;
        font-weight: bold;
        font-family: "raleway", sans-serif;
        font-size: 30px;


    }
h1{

    color: #f44336;
    font-weight: bold;
    font-family: "raleway", sans-serif;
    font-size: 35px;


}
    #bd{width: 35%;
        border: 3px solid red;
        padding: 20px;
        border-radius: 25px;
        background-color: white;
        background-color: rgba(255,255, 255, 0.2);

    }
    img{
        display: block;
        margin-left: auto;
        margin-right: auto;}


input[type=submit] {
    width: 10%;
    height: 5%;
    background-color: #f44336;
    color: white;
    margin: 8px 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
    input[type=number] {
        width: 30%;
        height: 2%;
        padding: 12px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid red;
        border-radius: 4px;
    }


</style>

<body>

<form name="form1" method="post" action="T_save_set.php">

    <center>
    <div id="bd" style="margin-top: 15%">
            <img src="cinema.png"width="150" height="150">
        <br><h1>Select room seat</h1>

         <p1>Select Row<br><input name="row" type="number" id="row" ><br>
             &nbsp;<br>Select Column<br><input name="col" type="number" id="col"><br></p1>



            <input type="submit" name="Submit" value="submit" ></center>
    </div>
    <center>
</form>
</body>
</html>

