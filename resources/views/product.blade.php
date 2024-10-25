<div>
    <h1>Product Data</h1>
    {{-- {{ print_r($data) }} --}}
    <ul>
        <li>
            <span>productCategory : </span><span>{{$data->productCategory }}</span>

        </li>
        <li>
            <span>name : </span><span>{{$data->name }}</span>
        </li>
        <li>
            <span>brand : </span><span>{{$data->brand }}</span>

        </li>
        <li>
            <span>description : </span><span>{{$data->description }}</span>

        </li>
        <li>
            <span>basePrice : </span><span>{{$data->basePrice }}</span>

        </li>
    </ul>
    <!-- Order your soul. Reduce your wants. - Augustine -->
</div>
