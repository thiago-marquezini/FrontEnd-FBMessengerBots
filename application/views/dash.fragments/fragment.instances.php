<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <?
            foreach ($UserBots as $UserBot)
            { 
        ?>
              <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                <div class="card text-center">
                  <div class="card-body d-flex flex-column">
                    <div class="wrapper">
                      <img src="../../../assets/images/faces/face10.jpg" class="img-lg rounded-circle mb-2" alt="profile image">
                      <h4><? echo $UserBot->name; ?></h4>
                      <p class="text-muted">Developer</p>
                      <p class="mt-4 card-text"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem </p>
                      <button class="btn btn-rounded btn-primary btn-sm mt-3 mb-4">Follow</button>
                    </div>
                    <div class="row border-top pt-3 mt-auto">
                      <div class="col-4">
                        <h6 class="font-weight-medium">5896</h6>
                        <p>Post</p>
                      </div>
                      <div class="col-4">
                        <h6 class="font-weight-medium">1596</h6>
                        <p>Followers</p>
                      </div>
                      <div class="col-4">
                        <h6 class="font-weight-medium">7896</h6>
                        <p>Likes</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <?
            } 
        ?>


            </div>
          </div>
        </div>
</div>