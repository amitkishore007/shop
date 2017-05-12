 <div id="" class="header-md">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12">
                 
                    <h1 class="text-center">Create Category</h1>
                   
            
                </div>
              </div>
            </div>
          </div>
          <div id="content" class="container-fluid">
            <div class="content-body">
            <div class="row">
             
              <div class="col-xs-12 col-sm-12">
                <div class="card p-b-20">
                  <header class="card-heading ">
                    <h2 class="card-title">Category info</h2>
                    <!-- <h2 class="text-center success-msg alert alert-success"></h2> -->
                    <ul class="card-actions icons right-top">
                      <li>
                        <a href="javascript:void(0)" data-toggle-view="code">
                          <i class="zmdi zmdi-code"></i>
                        </a>
                      </li>
                    </ul>
                  </header>
                  <div class="card-body">
                    <form>
                      <div class="form-group label-floating is-empty">
                        <label class="control-label">Name</label>
                        <input type="text" class="form-control cat_name" name='name' >
                        <span class="error name-error cat_name text-danger" ></span>
                      </div>
                      

                      <div class="form-group label-floating ">
                          <label for="" class="control-label"></label>
                          <select class="select form-control parent_cat">
                            <option value="">Select parent</option>
                            <option value="0">Make parent category</option>
                            <?php foreach ($categories as $category) :  ?>
                               <option value='<?php echo $category->id; ?>'><?php echo $category->name; ?></option>
                            <?php endforeach; ?>                          
                            
                          </select>

                      </div>
                          <span class="error cat-error parent_cat text-danger" ></span>
                  
                      <div class="form-group label-floating is-empty">
                        <label for="textArea" class="control-label">Category description ( optional)</label>
                        <textarea class="form-control cat_desc" rows="3" id="textArea"></textarea>
                        <span class="help-block">Write something about this category </span>
                      <span class="error desc-error cat_desc text-danger" ></span>
                      </div>
                       <div class="form-group label-floating is-empty">
                        <button class="btn btn-info create-cat" type="submit" name='submit'>Submit<div class="ripple-container"></div></button>
                      </div>
                      
                    </form>
                  </div>
                </div>

              </div>
            </div>
            
         
            
          </div>
          <div class="loader loader-pink form-loader"></div>
        </div>