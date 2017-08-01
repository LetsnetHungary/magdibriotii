<?
  $products = $this->products;
  $category = $this->category;

?>
<main>
    <div class="container-fluid productsholder">
      <?
$k = 1;
        foreach($products as $product) {
          if(strpos($product, $category) !== false ) { ?>

            <div class="col-sm-4 gridelement popup" data-img = '../../assets/images/viragcsoportok/<? echo $category . "/" . $product;  ?>' data-toggle="modal" data-target="#myModal">
              <div class="imageholder">
                  <img class="gridpic" src="../../assets/images/viragcsoportok/<? echo $category . "/" . $product;  ?>" alt="termékkép">
              </div>
              <div class="textholder">
                  <p class="elementtext"><? $name = explode("_", $category); foreach($name as $n) { echo $n . " "; } echo $k; ?></p>
              </div>
            </div>


          <? $k++; }
        }
      
      ?>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="container-fluid bigholder">

            <div class="row tinyholder">
              <div class="col-sm-12 picholder">
                  <img class="detailspic img-responsive" id = 'modalimg' src="" alt="termékkép">
              </div>
            </div>

          </div>
        </div>

    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.popup').click(function() {
        $('#modalimg').attr('src', $(this).data("img"));
      })
    })
  </script>

</main>
