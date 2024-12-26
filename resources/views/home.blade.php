@extends("layouts.default")

@section("title", "Cotação Hoje")

@section("content")
    <div class="flex flex-col mt-32 items-center">
        <section>
            <div class="grid gap-4 grid-cols-2">
                <input class="border-solid border-2 border-black rounded-xl w-80 h-11 text-base px-2"
                       type="text" placeholder="USD"
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                <input class="border-solid border-2 border-black rounded-xl w-80 h-11 text-base px-2"
                       type="text" placeholder="BRL"
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>
            <p class="mt-4 text-base">1,000 USD = 1,000 BRL</p>
        </section>
        <section>
                <h2>Período de tempo</h2>
            <div>
                <button>48h</button>
                <button>1 semana</button>
                <button>1 mês</button>
                <button>6 meses</button>
                <button>1 ano</button>
            </div>
        </section>
    </div>
@endsection
