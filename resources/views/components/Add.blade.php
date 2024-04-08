<div class="container">

    <section>

        <form method="POST" action="{{ route('storeservice') }}" enctype="multipart/form-data" class="add-product-form">
            @csrf
            <h3 style="color: #D63484;">Add new Service</h3>
            <input type="text" name="name" placeholder="Enter the service name" class="box" required>
            <input type="text" name="info" placeholder="Enter service information" class="box" required>
            <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="box" required>
            <input type="number" name="price" min="0" placeholder="Enter the service price" class="box" required>
            <input type="submit" value="Add Service" class="btn">
        </form>

    </section>

    <section class="display-product-table">

       <table>

          <thead>

             <th>Service</th>
             <th>Service Description</th>
             <th>Action</th>
          </thead>

          <tbody>
             @foreach($products as $product)
             <tr>

                <td>{{ $product->name }}</td>
                <td>{{$product->info }}</td>
                <td>

                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete"><i class="fas fa-trash"></i> delete</button>
                    </form>

                </td>
             </tr>
             @endforeach
           </tbody>
       </table>

    </section>

</div>
