@extends('pages/service')

@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Category</th>
            <th>Budget</th>
            <th>Sumbudegt</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            @php
                    $subtotal = $details['quantity'] * $details['price'];
                    $total += $subtotal;
            @endphp
                <tr rowId="{{ $id }}">
                    <td data-th="Service">{{ $details['name'] }}</td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Subtotal" class="text-center">Rs{{ $subtotal }}</td>
                    {{-- <td data-th="Subtotal" class="text-center"></td> --}}
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2" class="text-left">Total: </td>
            <td colspan="1" class="text-center">Rs{{ $total }}</td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ route('services')}}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Back to Choose</a>
                <a href="{{ route('checking') }}" class="btn btn-danger">Finish</a>

                {{-- <button class="btn btn-danger">Finish</button> --}}
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.sopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("rowId"),
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".delete-product").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
