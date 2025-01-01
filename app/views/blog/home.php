<?php $this->view("blog/header",$data);?>

      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            
          </header>

          <?php if(is_array($data['posts'])): ?>
          
          <?php foreach($data['posts'] as $row): ?>

            </section><section class="s_three_columns o_cc pt32 pb32 o_colored_level o_cc4" data-vcss="001" data-snippet="s_three_columns" data-name="Columns">
        <div class="container">
            <div class="row d-flex align-items-stretch">
              <a href="<?=ROOT.'single_post/' .$row->url_address; ?>/" title="Portfolio Image"></a>
                <div class="col-lg-4 s_col_no_bgcolor pt16 pb16">
                    <div class="card text-bg-white h-100 shadow" style="border-width: 0px !important">
                        <img class="card-img-top" src="<?=ROOT. $row->image?>" alt="" loading="lazy"/>
                        <div class="card-body">
                            <h3 class="card-title"><?=$row->title?></h3>
                            <p class="card-text"><?=$row->description?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        
       

          <?php endforeach; ?>
          <?php endif; ?>

          </div>  
        </article>
        <br>
        <section>
          <a href="<?=$data['prev_page']?>"><input type="button" class="s-12 submit-form button background-primary text-white" style="width: 200px;"  value="Prev"></a>
          <a href="<?=$data['next_page']?>"><input type="button" class="s-12 submit-form button background-primary text-white" style="width: 200px; float: right;"  value="Next"></a>
        </section>
      </main>

