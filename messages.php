<?php
session_start();
if(!isset($_SESSION['id'])) { header("Location: login.php");};
include 'header2.php'; $id = $_SESSION['id'];?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Messages</li>
  </ol>
</nav>

<div class="container-fluid">

  <div class="row">
    <div class="col-3 h-100">
      <h3>Friends</h3>
      <ul class="list-group mt-2">
        <li class="list-group-item" style="cursor:pointer">Friend 1</li>
      </ul>
    </div>

    <div class="col-8" >
      <div id="messages" style="background-color:#B20000;color:white;border-radius:10px;padding:1em;">
      </div>
      <div class="row">
        <input type="text" class="form-control mt-3 ml-5 col-10" placeholder="Send a message">
        <button id="send" class="btn btn-primary mt-3 ml-3" style="height: 2.5em;">Send</button>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">
  $('document').ready(function() {

    $('#messages').load('scripts/getMsg.php');

    setInterval (function () {
      $('#messages').load('scripts/getMsg.php');
    }, 1000);

    $('#send').click(function() {
      $.post("scripts/sendMsg.php", {});
    });

  });
</script>
