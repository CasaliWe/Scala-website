<link rel="stylesheet" href="<?= $base_url; ?>modulos-admin/contents/solucoes/css/style.css">

<section>
    <p class="mb-5 small">Sessão destinada para <strong>Soluções</strong></p>

    <form action="<?= $base_url; ?>modulos-admin/contents/solucoes/php/atualizar.php" method="post" onsubmit="loading()">
        <div class='mb-3'>
          <label for='scala-e' class="small fw-semibold">A Scala é:</label>
          <input type='text' id='scala-e' value="<?= $solucoes['scala_e']; ?>" name='scala-e' placeholder='Texto...' class='form-control' required>
        </div>

        <div class='mb-3'>
          <label for='scala-faz' class="small fw-semibold">A Scala faz:</label>
          <input type='text' id='scala-faz' value="<?= $solucoes['scala_faz']; ?>" name='scala-faz' placeholder='Texto...' class='form-control' required>
        </div>

        <div class='mb-3'>
          <label for='quem-e-scala' class="small fw-semibold">Quem é a Scala:</label>
          <input type='text' id='quem-e-scala' value="<?= $solucoes['quem_e_scala']; ?>" name='quem-e-scala' placeholder='Texto...' class='form-control' required>
        </div>

        <div class='mb-3'>
          <label for='scala-onde' class="small fw-semibold">Onde estamos:</label>
          <input type='text' id='scala-onde' value="<?= $solucoes['scala_onde']; ?>" name='scala-onde' placeholder='Texto...' class='form-control' required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</section>

<script src="<?= $base_url; ?>modulos-admin/contents/solucoes/js/app.js"></script>