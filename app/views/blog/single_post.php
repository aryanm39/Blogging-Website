<?php $this->view('blog/header', $data); ?>
<style>
  .card {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  width: 350px;
  left: 600px;
  display: flex;
  flex-direction: column;
}

.title {
  font-size: 24px;
  font-weight: 600;
  text-align: center;
}

.form {
  margin-top: 20px;
  display: flex;
  flex-direction: column;
}

.group {
  position: relative;
}

.form .group label {
  font-size: 14px;
  color: rgb(99, 102, 102);
  position: absolute;
  top: -10px;
  left: 10px;
  align-items: center;
  background-color: #fff;
  transition: all .3s ease;
}

.form .group input,
.form .group textarea {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  margin-bottom: 20px;
  outline: 0;
  width: 100%;
  background-color: transparent;
}

.form .group input:placeholder-shown+ label, .form .group textarea:placeholder-shown +label {
  top: 10px;
  background-color: transparent;
}

.form .group input:focus,
.form .group textarea:focus {
  border-color: #3366cc;
}

.form .group input:focus+ label, .form .group textarea:focus +label {
  top: -10px;
  left: 10px;
  background-color: #fff;
  color: #3366cc;
  font-weight: 600;
  font-size: 14px;
}

.form .group textarea {
  resize: none;
  height: 100px;
}

.form button {
  background-color: #3366cc;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.form button:hover {
  background-color: #27408b;
}

</style>

<section class="section background-white">
<//?php $this->view("blog/cookie",$data);?>
  <div class="s-12 m-12 l-4 center">

    <h4 class="text-size-20 margin-bottom-20 text-dark text-center"><?= $data['post']->title ?></h4>
    <img src=" <?= ROOT . $data['post']->image ?>" />
    <br>
    <?= $data['post']->description ?>
    <br>
    <br>
    <br>
  </div>
  <div class="card">
  <span class="title">Leave a Comment</span>
  <form class="form">
    <div class="group">
    <input placeholder="‎" type="text" required="">
    <label for="name">Name</label>
    </div>
<div class="group">
    <input placeholder="‎" type="email" id="email" name="email" required="">
    <label for="email">Email</label>
    </div>
<div class="group">
    <textarea placeholder="‎" id="comment" name="comment" rows="5" required=""></textarea>
    <label for="comment">Comment</label>
</div>
    <button type="submit">Submit</button>
  </form>
</div>

</section>