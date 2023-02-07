<main>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Img</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php foreach ($product as $key => $value) {
        ?>
            <tr>
                <td><?
                    $value['id_hh']
                   
                    ?></td>
                <td><?$value['ten_hh']?></td>
                <td>1</td>
                <td>1</td>
                <td><button><a href="">Change</a></button><button><a href="">Delete</a></button></td>
            </tr>
        <?php } ?>
    </table>
</main>