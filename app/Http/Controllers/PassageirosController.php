<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passageiros;

class PassageirosController extends Controller
{
    public function index()
    {
        $passageiros = Passageiros::orderBy('nome', 'ASC')->paginate(10);

        $data = [
            'passageiros' => $passageiros,
        ];

        return view('passageiros.index', $data);
    }

    public function show($id)
    {

    }

    public function create()
    {
        $data = [
            'aeroportos' => $this->getAllAeroportos(),
        ];
        return view('passageiros.create', $data);
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'nome' => 'required|min:3',
            'telefone' => 'required',
            'email' => 'required|email',
            'origem' => 'required',
            'destino' => 'required',
            'num_voo' => 'required|numeric'
        ]);

        $passageiro             = new Passageiros();
        $passageiro->nome       = $request->input('nome');
        $passageiro->telefone   = $request->input('telefone');
        $passageiro->email      = $request->input('email');
        $passageiro->origem     = $request->input('origem');
        $passageiro->destino    = $request->input('destino');
        $passageiro->num_voo    = $request->input('num_voo');

        if($passageiro->save())
        {
            return redirect('passageiros/create')->with('success','Passageiro Cadastrado com sucesso!!!');
        }

    }

    public function edit($id)
    {
        $passageiro = Passageiros::find($id);
        $aeroportos = $this->getAllAeroportos();
        return view('passageiros.edit', compact('passageiro','id','aeroportos'));

    }

    public function update(Request $request, $id)
    {
        $passageiro = Passageiros::find($id);

        $this->validate($request,[
            'nome' => 'required|min:3',
            'telefone' => 'required',
            'email' => 'required|email',
            'origem' => 'required',
            'destino' => 'required',
            'num_voo' => 'required|numeric'
        ]);

        $passageiro->nome       = $request->get('nome');
        $passageiro->telefone   = $request->get('telefone');
        $passageiro->email      = $request->get('email');
        $passageiro->origem     = $request->get('origem');
        $passageiro->destino    = $request->get('destino');
        $passageiro->num_voo    = $request->get('num_voo');

        if($passageiro->save())
        {
            return redirect('passageiros/'.$id.'/edit')->with('success','Passageiro atualizado com sucesso!!!');
        }

    }

    public function destroy($id)
    {
        $passageiro = Passageiros::find($id);

        $passageiro->delete();
        return redirect()->back()->with('success','Passageiro deletado com sucesso!!!');

    }

    public function getAllAeroportos()
    {
        $aeroportos = [
            "BSB" => "Aeroporto Internacional de Brasília / Presidente Jucelino Kubitschek",
            "CGH" => "Aeroporto Internacional de São Paulo / Congonhas",
            "GIG" => "Aeroporto Internacional do Rio de Janeiro / Galeão-Antônio Carlos Jobim",
            "SSA" => "Aeroporto Internacional de Salvador / Deputado Luis Eduardo Magalhães",
            "FLN" => "Aeroporto Internacional de Florianópolis / Hercílio Luz",
            "POA" => "Aeroporto Internacional de Porto Alegre / Salgado Filho",
            "VCP" => "Aeroporto Internacional de Viracopos / Campinas",
            "REC" => "Aeroporto Internacional do Recife/ Guararapes – Gilberto Freyre",
            "CWB" => "Aeroporto Internacional de Curitiba / Afonso Pena",
            "BEL" => "Aeroporto Internacional de Belém / Val de Cans",
            "VIX" => "Aeroporto de Vitória – Eurico de Aguiar Salles",
            "SDU" => "Aerorporto Santos Dumont",
            "CGB" => "Aeroporto Internacional de Cuiabá / Marechal Rondon",
            "CGR" => "Aeroporto Internacional de Campo Grande",
            "FOR" => "Aeroporto Internacional de Fortaleza / Pinto Martins",
            "MCP" => "Aeroporto Internacional de Macapá",
            "MGF" => "Aeroporto Regional de Maringá / Silvio Name Junior",
            "GYN" => "Aeroporto de Goiânia / Santa Genoveva",
            "NVT" => "Aeroporto Internacional de Navegantes / Ministro Victor Konder",
            "MAO" => "Aeroporto Internacional de Manaus / Eduardo Gomes",
            "NAT" => "Aeroporto Internacional de Natal / Augusto Severo",
            "BPS" => "Aeroporto Internacional de Porto Seguro",
            "MCZ" => "Aeroporto de Maceió / Zumbi dos Palmares",
            "PMW" => "Aeroporto de Palmas/Brigadeiro Lysias Rodrigues",
            "SLZ" => "Aeroporto Internacional de São Luís / Marechal Cunha Machado",
            "GRU" => "Aeroporto Internacional de São Paulo/Guarulhos-Governador André Franco Motoro",
            "LDB" => "Aeroporto de Londrina / Governador José Richa",
            "PVH" => "Aeroporto Internacional de Porto Velho / Governador Jorge Teixeira de Oliveira",
            "RBR" => "Aeroporto Internacional de Rio Branco / Plácido de Castro",
            "JOI" => "Aeroporto de Joinville / Lauro Carneiro de Loyola",
            "UDI" => "Aeroporto de Uberlândia / Ten. Cel. Av. César Bombonato",
            "CXJ" => "Aeroporto Regional de Caxias do Sul / Hugo Cantergiani",
            "IGU" => "Aeroporto Internacional de Foz do Iguaçu",
            "THE" => "Aeroporto de Teresina – Senador Petrônio Portella",
            "AJU" => "Aeroporto Internacional de Aracaju / Santa Maria",
            "JPA" => "Aeroporto Internacional de João Pessoa / Presidente Castro Pinto",
            "PNZ" => "Aeroporto de Petrolina / Senador Nilo Coelho",
            "CNF" => "Aeroporto Internacional de Minas Gerais / Confins – Tancredo Neves",
            "BVB" => "Aeroporto Internacional de Boa Vista / Atlas Brasil Cantanhede",
            "CPV" => "Aeroporto de Campina Grande / Presidente João Suassuna",
            "STM" => "Aeroporto de Santarém / Maestro Wilson Fonseca",
            "IOS" => "Aeroporto de Ilhéus/Bahia-Jorge Amado",
            "JDO" => "Aeroporto de Juazeiro do Norte – Orlando Bezerra",
            "IMP" => "Aeroporto de Imperatriz – Prefeito Renato Moreira",
            "XAP" => "Aeroporto de Chapecó – Serafin Enoss Bertaso",
            "MAB" => "Aeroporto de Marabá",
            "CZS" => "Aeroporto Internacional de Cruzeiro do Sul",
            "PPB" => "Aeroporto Estadual de Presidente Prudente",
            "CFB" => "Aeroporto Internacional de Cabo Frio",
            "FEN" => "Aeroporto de Fernando de Noronha",
            "JTC" => "Aeroporto Estadual de Bauru/Arealva",
            "MOC" => "Aeroporto de Montes Claros/Mário Ribeiro"
        ];

        return $aeroportos;
    }
}
