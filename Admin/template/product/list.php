<?php
    require_once('../app/action/Product/getAll.php');
    require_once('../app/action/Category/findCategoryById.php');
    require_once('../app/action/Provider/findProviderById.php');
?>
<style>

</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of all Product</h4>
                        <input type="text" id="myInput" onkeyup="myFunction();" placeholder="Search a product.." />
                        <table class="table table-hover" id="example">
                            <thead>
                                <tr>
                                    
                                    <th> Label </th>
                                    <th>Number </th>
                                    <th>Price </th>
                                    <th> Photo </th>
                                    <th>Category</th>
                                    <th> add By </th>
                                    <th>Provided By</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    foreach( $product->getAll() as $v)
                                    {
                                        $id = $v{'id'};
                                        $Label= $v{'label'};
                                        $number= $v{'number'};
                                        $price= $v{'price'};
                                        $photo= $v{'photo'};
                                        $login= $v{'login'};
                                        $category = $category->findCathegoryById($v{'idCat'});
                                        $provider = $provider ->findProviderById($v{'idProvider'});
                                        $idProvider= $v{'idProvider'};
                                        echo "<tr>";
                                            echo "<td> $Label </td> ";
                                            echo "<td>  $number </td> ";
                                            echo "<td> $price </td> ";
                                            echo "<td><img onclick='updateImage($id);' style='width:100px; height:80px;' src='$photo'  /></td> ";
                                            echo "<td>".$category->getLabel()."</td> ";
                                            echo "<td> $login </td> ";
                                            echo "<td> ".$provider->getFirst_name().' '.$provider->getLast_name().'('.$provider->getId().')'."</td>";
                                            echo "<td><button onclick='update($id);' class='fa fa-pencil'></button></td>";
                                            echo "<td><button onclick='destroy($id);' class='fa fa-trash'></<button></td>";
                                        echo "<tr>";
                                        $i++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction()
    {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("example");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++)
        {
            td = tr[i].getElementsByTagName("td")[0];
            if (td)
            {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1)
                {
                    tr[i].style.display = "";
                }
                else
                {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
    
    function destroy(id)
    {
        alertify.confirm
        (
            "Do you want to delete this product ?.",
            function()
            {
                $.ajax
                (
                    {
                        async: false, //if you want to change a global variable you should add this instruction
                        type: 'POST',
                        url: "../app/action/Product/delete.php",
                        data:
                        {
                            'id' : id
                        },
                        success: 
                        function(result)
                        {
                            alertify.success(result);
                        }
                    }
                );
            },
            function()
            {
                alertify.error('You cancelled the deleting');
            }
        );
    }
    
    function update(id)
    {
        location.href = "Product_Management.php?page=update&id="+id;
    }
    
    function updateImage(id)
    {
        location.href = "Product_Management.php?page=updateImage&id="+id;
    }
</script>