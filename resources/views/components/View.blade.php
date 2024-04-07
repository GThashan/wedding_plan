<h1 style="color: #D63484; text-align: center; padding: 20px;">View Customer</h1>


<div class="body" style="display: flex; justify-content: center; align-items: center;">

    <div class="tabl-Container">
        <div class="display-product-table">
            <table>
                <thead>

                    <th>Customer Name</th>
                    <th>Contact NO</th>
                    <th>Contact NO</th>
                    <th>Customer Address</th>
                    <th>Event Date</th>
                    <th>Approved or Not</th>

                </thead>
                <tbody>
                    @foreach( $checkouts as  $checkout)
                    <tr>

                        <td>{{ $checkout->name }}</td>
                        <td>{{ $checkout->phoneNumber1 }}</td>
                        <td>{{ $checkout->phoneNumber2 }}</td>
                        <td>{{ $checkout->address }}</td>
                        <td>{{ $checkout->weddingDate}}</td>
                        <td>
                            <a href="">Apporve</a> |
                            <a href="">No</a>
                            {{-- <i class="fas fa-check"></i> --}}
                            {{-- <a href="#" class="delete-btn"> <i class="fas fa-check"></i></a>
                            <a href="#" class="option-btn"> <i class="fas fa-times"></i></a> --}}

                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>
</div>
