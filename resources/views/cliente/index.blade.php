<x-app-layout >
    <TitleCLients>
        <container class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Clientes</h1>
                    <subtitle>Instigar a pessoa a conhecer nossos antigos trabalhos.</subtitle>
                </div>
                <div class="col-6">
                    <p>  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </container>
    </TitleCLients>

    <customerList class="container text-center" style="display: block; margin: 0 auto; ">
        <div class="row align-items-center mb-30">
            <div class="col-lg-4 mb-30">
                <h3 class="">Categorias:</h3>
            </div>
            <div class="col-lg-8 mb-30">
                <div class="bi-adaptive-right">

                    <ul class="bi-category-list">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Art</a></li>
                        <li><a href="#">Code</a></li>
                        <li><a href="#" class="bi-active">Technology</a></li>
                        <li><a href="#">All categories</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="row mb-5">
        @foreach ($customers as $customer)
            <x-customer-item :customer="$customer">
            </x-customer-item>
        @endforeach
        </ul>
        <div class="mt-5 mb-5">
            {{ $customers->links() }}
        </div>
    </customerList>


</x-app-layout>
