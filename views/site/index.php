<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="container py-3">

  <main>
      <h1>Каталог</h1>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <?php
            foreach($products as $product) {
                echo '
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">'.$product->name.'</h4>
                                </div>
                                <div class="card-body">
                                    <img src="web/uploads/'.$product->image.'" alt="product" width="300px" height="360px"/>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>Цена: '.$product->price.' рублей</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Купить</button>
                                </div>
                            </div>
                        </div>
                    ';
            }
        ?>
    </div>
  </main>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>
