<style>
  .table-scroll {
    height: 300px;
    overflow: auto;
  }
</style>

<div class="table-scroll">
  <table>
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= 100; $i++) { ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td>Nama <?php echo $i; ?></td>
          <td>Alamat <?php echo $i; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
