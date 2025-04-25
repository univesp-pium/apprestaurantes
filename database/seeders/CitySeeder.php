<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                "uf" => "RO",
                "city" => "Alta Floresta D´oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Ariquemes"
            ],
            [
                "uf" => "RO",
                "city" => "Cabixi"
            ],
            [
                "uf" => "RO",
                "city" => "Cacoal"
            ],
            [
                "uf" => "RO",
                "city" => "Cerejeiras"
            ],
            [
                "uf" => "RO",
                "city" => "Colorado do Oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Corumbiara"
            ],
            [
                "uf" => "RO",
                "city" => "Costa Marques"
            ],
            [
                "uf" => "RO",
                "city" => "Espigão D´oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Guajará-mirim"
            ],
            [
                "uf" => "RO",
                "city" => "Jaru"
            ],
            [
                "uf" => "RO",
                "city" => "Ji-paraná"
            ],
            [
                "uf" => "RO",
                "city" => "Machadinho D´oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Nova Brasilândia D´oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Ouro Preto do Oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Pimenta Bueno"
            ],
            [
                "uf" => "RO",
                "city" => "Porto Velho"
            ],
            [
                "uf" => "RO",
                "city" => "Presidente Médici"
            ],
            [
                "uf" => "RO",
                "city" => "Rio Crespo"
            ],
            [
                "uf" => "RO",
                "city" => "Rolim de Moura"
            ],
            [
                "uf" => "RO",
                "city" => "Santa Luzia D´oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Vilhena"
            ],
            [
                "uf" => "RO",
                "city" => "São Miguel do Guaporé"
            ],
            [
                "uf" => "RO",
                "city" => "Nova Mamoré"
            ],
            [
                "uf" => "RO",
                "city" => "Alvorada D´oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Alto Alegre Dos Parecis"
            ],
            [
                "uf" => "RO",
                "city" => "Alto Paraíso"
            ],
            [
                "uf" => "RO",
                "city" => "Buritis"
            ],
            [
                "uf" => "RO",
                "city" => "Novo Horizonte do Oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Cacaulândia"
            ],
            [
                "uf" => "RO",
                "city" => "Campo Novo de Rondônia"
            ],
            [
                "uf" => "RO",
                "city" => "Candeias do Jamari"
            ],
            [
                "uf" => "RO",
                "city" => "Castanheiras"
            ],
            [
                "uf" => "RO",
                "city" => "Chupinguaia"
            ],
            [
                "uf" => "RO",
                "city" => "Cujubim"
            ],
            [
                "uf" => "RO",
                "city" => "Governador Jorge Teixeira"
            ],
            [
                "uf" => "RO",
                "city" => "Itapuã do Oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Ministro Andreazza"
            ],
            [
                "uf" => "RO",
                "city" => "Mirante da Serra"
            ],
            [
                "uf" => "RO",
                "city" => "Monte Negro"
            ],
            [
                "uf" => "RO",
                "city" => "Nova União"
            ],
            [
                "uf" => "RO",
                "city" => "Parecis"
            ],
            [
                "uf" => "RO",
                "city" => "Pimenteiras do Oeste"
            ],
            [
                "uf" => "RO",
                "city" => "Primavera de Rondônia"
            ],
            [
                "uf" => "RO",
                "city" => "São Felipe D´oeste"
            ],
            [
                "uf" => "RO",
                "city" => "São Francisco do Guaporé"
            ],
            [
                "uf" => "RO",
                "city" => "Seringueiras"
            ],
            [
                "uf" => "RO",
                "city" => "Teixeirópolis"
            ],
            [
                "uf" => "RO",
                "city" => "Theobroma"
            ],
            [
                "uf" => "RO",
                "city" => "Urupá"
            ],
            [
                "uf" => "RO",
                "city" => "Vale do Anari"
            ],
            [
                "uf" => "RO",
                "city" => "Vale do Paraíso"
            ],
            [
                "uf" => "AC",
                "city" => "Acrelândia"
            ],
            [
                "uf" => "AC",
                "city" => "Assis Brasil"
            ],
            [
                "uf" => "AC",
                "city" => "Brasiléia"
            ],
            [
                "uf" => "AC",
                "city" => "Bujari"
            ],
            [
                "uf" => "AC",
                "city" => "Capixaba"
            ],
            [
                "uf" => "AC",
                "city" => "Cruzeiro do Sul"
            ],
            [
                "uf" => "AC",
                "city" => "Epitaciolândia"
            ],
            [
                "uf" => "AC",
                "city" => "Feijó"
            ],
            [
                "uf" => "AC",
                "city" => "Jordão"
            ],
            [
                "uf" => "AC",
                "city" => "Mâncio Lima"
            ],
            [
                "uf" => "AC",
                "city" => "Manoel Urbano"
            ],
            [
                "uf" => "AC",
                "city" => "Marechal Thaumaturgo"
            ],
            [
                "uf" => "AC",
                "city" => "Plácido de Castro"
            ],
            [
                "uf" => "AC",
                "city" => "Porto Walter"
            ],
            [
                "uf" => "AC",
                "city" => "Rio Branco"
            ],
            [
                "uf" => "AC",
                "city" => "Rodrigues Alves"
            ],
            [
                "uf" => "AC",
                "city" => "Santa Rosa do Purus"
            ],
            [
                "uf" => "AC",
                "city" => "Senador Guiomard"
            ],
            [
                "uf" => "AC",
                "city" => "Sena Madureira"
            ],
            [
                "uf" => "AC",
                "city" => "Tarauacá"
            ],
            [
                "uf" => "AC",
                "city" => "Xapuri"
            ],
            [
                "uf" => "AC",
                "city" => "Porto Acre"
            ],
            [
                "uf" => "AM",
                "city" => "Alvarães"
            ],
            [
                "uf" => "AM",
                "city" => "Amaturá"
            ],
            [
                "uf" => "AM",
                "city" => "Anamã"
            ],
            [
                "uf" => "AM",
                "city" => "Anori"
            ],
            [
                "uf" => "AM",
                "city" => "Apuí"
            ],
            [
                "uf" => "AM",
                "city" => "Atalaia do Norte"
            ],
            [
                "uf" => "AM",
                "city" => "Autazes"
            ],
            [
                "uf" => "AM",
                "city" => "Barcelos"
            ],
            [
                "uf" => "AM",
                "city" => "Barreirinha"
            ],
            [
                "uf" => "AM",
                "city" => "Benjamin Constant"
            ],
            [
                "uf" => "AM",
                "city" => "Beruri"
            ],
            [
                "uf" => "AM",
                "city" => "Boa Vista do Ramos"
            ],
            [
                "uf" => "AM",
                "city" => "Boca do Acre"
            ],
            [
                "uf" => "AM",
                "city" => "Borba"
            ],
            [
                "uf" => "AM",
                "city" => "Caapiranga"
            ],
            [
                "uf" => "AM",
                "city" => "Canutama"
            ],
            [
                "uf" => "AM",
                "city" => "Carauari"
            ],
            [
                "uf" => "AM",
                "city" => "Careiro"
            ],
            [
                "uf" => "AM",
                "city" => "Careiro da Várzea"
            ],
            [
                "uf" => "AM",
                "city" => "Coari"
            ],
            [
                "uf" => "AM",
                "city" => "Codajás"
            ],
            [
                "uf" => "AM",
                "city" => "Eirunepé"
            ],
            [
                "uf" => "AM",
                "city" => "Envira"
            ],
            [
                "uf" => "AM",
                "city" => "Fonte Boa"
            ],
            [
                "uf" => "AM",
                "city" => "Guajará"
            ],
            [
                "uf" => "AM",
                "city" => "Humaitá"
            ],
            [
                "uf" => "AM",
                "city" => "Ipixuna"
            ],
            [
                "uf" => "AM",
                "city" => "Iranduba"
            ],
            [
                "uf" => "AM",
                "city" => "Itacoatiara"
            ],
            [
                "uf" => "AM",
                "city" => "Itamarati"
            ],
            [
                "uf" => "AM",
                "city" => "Itapiranga"
            ],
            [
                "uf" => "AM",
                "city" => "Japurá"
            ],
            [
                "uf" => "AM",
                "city" => "Juruá"
            ],
            [
                "uf" => "AM",
                "city" => "Jutaí"
            ],
            [
                "uf" => "AM",
                "city" => "Lábrea"
            ],
            [
                "uf" => "AM",
                "city" => "Manacapuru"
            ],
            [
                "uf" => "AM",
                "city" => "Manaquiri"
            ],
            [
                "uf" => "AM",
                "city" => "Manaus"
            ],
            [
                "uf" => "AM",
                "city" => "Manicoré"
            ],
            [
                "uf" => "AM",
                "city" => "Maraã"
            ],
            [
                "uf" => "AM",
                "city" => "Maués"
            ],
            [
                "uf" => "AM",
                "city" => "Nhamundá"
            ],
            [
                "uf" => "AM",
                "city" => "Nova Olinda do Norte"
            ],
            [
                "uf" => "AM",
                "city" => "Novo Airão"
            ],
            [
                "uf" => "AM",
                "city" => "Novo Aripuanã"
            ],
            [
                "uf" => "AM",
                "city" => "Parintins"
            ],
            [
                "uf" => "AM",
                "city" => "Pauini"
            ],
            [
                "uf" => "AM",
                "city" => "Presidente Figueiredo"
            ],
            [
                "uf" => "AM",
                "city" => "Rio Preto da Eva"
            ],
            [
                "uf" => "AM",
                "city" => "Santa Isabel do Rio Negro"
            ],
            [
                "uf" => "AM",
                "city" => "Santo Antônio do Içá"
            ],
            [
                "uf" => "AM",
                "city" => "São Gabriel da Cachoeira"
            ],
            [
                "uf" => "AM",
                "city" => "São Paulo de Olivença"
            ],
            [
                "uf" => "AM",
                "city" => "São Sebastião do Uatumã"
            ],
            [
                "uf" => "AM",
                "city" => "Silves"
            ],
            [
                "uf" => "AM",
                "city" => "Tabatinga"
            ],
            [
                "uf" => "AM",
                "city" => "Tapauá"
            ],
            [
                "uf" => "AM",
                "city" => "Tefé"
            ],
            [
                "uf" => "AM",
                "city" => "Tonantins"
            ],
            [
                "uf" => "AM",
                "city" => "Uarini"
            ],
            [
                "uf" => "AM",
                "city" => "Urucará"
            ],
            [
                "uf" => "AM",
                "city" => "Urucurituba"
            ],
            [
                "uf" => "RR",
                "city" => "Amajari"
            ],
            [
                "uf" => "RR",
                "city" => "Alto Alegre"
            ],
            [
                "uf" => "RR",
                "city" => "Boa Vista"
            ],
            [
                "uf" => "RR",
                "city" => "Bonfim"
            ],
            [
                "uf" => "RR",
                "city" => "Cantá"
            ],
            [
                "uf" => "RR",
                "city" => "Caracaraí"
            ],
            [
                "uf" => "RR",
                "city" => "Caroebe"
            ],
            [
                "uf" => "RR",
                "city" => "Iracema"
            ],
            [
                "uf" => "RR",
                "city" => "Mucajaí"
            ],
            [
                "uf" => "RR",
                "city" => "Normandia"
            ],
            [
                "uf" => "RR",
                "city" => "Pacaraima"
            ],
            [
                "uf" => "RR",
                "city" => "Rorainópolis"
            ],
            [
                "uf" => "RR",
                "city" => "São João da Baliza"
            ],
            [
                "uf" => "RR",
                "city" => "São Luiz"
            ],
            [
                "uf" => "RR",
                "city" => "Uiramutã"
            ],
            [
                "uf" => "PA",
                "city" => "Abaetetuba"
            ],
            [
                "uf" => "PA",
                "city" => "Abel Figueiredo"
            ],
            [
                "uf" => "PA",
                "city" => "Acará"
            ],
            [
                "uf" => "PA",
                "city" => "Afuá"
            ],
            [
                "uf" => "PA",
                "city" => "Água Azul do Norte"
            ],
            [
                "uf" => "PA",
                "city" => "Alenquer"
            ],
            [
                "uf" => "PA",
                "city" => "Almeirim"
            ],
            [
                "uf" => "PA",
                "city" => "Altamira"
            ],
            [
                "uf" => "PA",
                "city" => "Anajás"
            ],
            [
                "uf" => "PA",
                "city" => "Ananindeua"
            ],
            [
                "uf" => "PA",
                "city" => "Anapu"
            ],
            [
                "uf" => "PA",
                "city" => "Augusto Corrêa"
            ],
            [
                "uf" => "PA",
                "city" => "Aurora do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Aveiro"
            ],
            [
                "uf" => "PA",
                "city" => "Bagre"
            ],
            [
                "uf" => "PA",
                "city" => "Baião"
            ],
            [
                "uf" => "PA",
                "city" => "Bannach"
            ],
            [
                "uf" => "PA",
                "city" => "Barcarena"
            ],
            [
                "uf" => "PA",
                "city" => "Belém"
            ],
            [
                "uf" => "PA",
                "city" => "Belterra"
            ],
            [
                "uf" => "PA",
                "city" => "Benevides"
            ],
            [
                "uf" => "PA",
                "city" => "Bom Jesus do Tocantins"
            ],
            [
                "uf" => "PA",
                "city" => "Bonito"
            ],
            [
                "uf" => "PA",
                "city" => "Bragança"
            ],
            [
                "uf" => "PA",
                "city" => "Brasil Novo"
            ],
            [
                "uf" => "PA",
                "city" => "Brejo Grande do Araguaia"
            ],
            [
                "uf" => "PA",
                "city" => "Breu Branco"
            ],
            [
                "uf" => "PA",
                "city" => "Breves"
            ],
            [
                "uf" => "PA",
                "city" => "Bujaru"
            ],
            [
                "uf" => "PA",
                "city" => "Cachoeira do Piriá"
            ],
            [
                "uf" => "PA",
                "city" => "Cachoeira do Arari"
            ],
            [
                "uf" => "PA",
                "city" => "Cametá"
            ],
            [
                "uf" => "PA",
                "city" => "Canaã Dos Carajás"
            ],
            [
                "uf" => "PA",
                "city" => "Capanema"
            ],
            [
                "uf" => "PA",
                "city" => "Capitão Poço"
            ],
            [
                "uf" => "PA",
                "city" => "Castanhal"
            ],
            [
                "uf" => "PA",
                "city" => "Chaves"
            ],
            [
                "uf" => "PA",
                "city" => "Colares"
            ],
            [
                "uf" => "PA",
                "city" => "Conceição do Araguaia"
            ],
            [
                "uf" => "PA",
                "city" => "Concórdia do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Cumaru do Norte"
            ],
            [
                "uf" => "PA",
                "city" => "Curionópolis"
            ],
            [
                "uf" => "PA",
                "city" => "Curralinho"
            ],
            [
                "uf" => "PA",
                "city" => "Curuá"
            ],
            [
                "uf" => "PA",
                "city" => "Curuçá"
            ],
            [
                "uf" => "PA",
                "city" => "Dom Eliseu"
            ],
            [
                "uf" => "PA",
                "city" => "Eldorado Dos Carajás"
            ],
            [
                "uf" => "PA",
                "city" => "Faro"
            ],
            [
                "uf" => "PA",
                "city" => "Floresta do Araguaia"
            ],
            [
                "uf" => "PA",
                "city" => "Garrafão do Norte"
            ],
            [
                "uf" => "PA",
                "city" => "Goianésia do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Gurupá"
            ],
            [
                "uf" => "PA",
                "city" => "Igarapé-açu"
            ],
            [
                "uf" => "PA",
                "city" => "Igarapé-miri"
            ],
            [
                "uf" => "PA",
                "city" => "Inhangapi"
            ],
            [
                "uf" => "PA",
                "city" => "Ipixuna do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Irituia"
            ],
            [
                "uf" => "PA",
                "city" => "Itaituba"
            ],
            [
                "uf" => "PA",
                "city" => "Itupiranga"
            ],
            [
                "uf" => "PA",
                "city" => "Jacareacanga"
            ],
            [
                "uf" => "PA",
                "city" => "Jacundá"
            ],
            [
                "uf" => "PA",
                "city" => "Juruti"
            ],
            [
                "uf" => "PA",
                "city" => "Limoeiro do Ajuru"
            ],
            [
                "uf" => "PA",
                "city" => "Mãe do Rio"
            ],
            [
                "uf" => "PA",
                "city" => "Magalhães Barata"
            ],
            [
                "uf" => "PA",
                "city" => "Marabá"
            ],
            [
                "uf" => "PA",
                "city" => "Maracanã"
            ],
            [
                "uf" => "PA",
                "city" => "Marapanim"
            ],
            [
                "uf" => "PA",
                "city" => "Marituba"
            ],
            [
                "uf" => "PA",
                "city" => "Medicilândia"
            ],
            [
                "uf" => "PA",
                "city" => "Melgaço"
            ],
            [
                "uf" => "PA",
                "city" => "Mocajuba"
            ],
            [
                "uf" => "PA",
                "city" => "Moju"
            ],
            [
                "uf" => "PA",
                "city" => "Mojuí dos Campos"
            ],
            [
                "uf" => "PA",
                "city" => "Monte Alegre"
            ],
            [
                "uf" => "PA",
                "city" => "Muaná"
            ],
            [
                "uf" => "PA",
                "city" => "Nova Esperança do Piriá"
            ],
            [
                "uf" => "PA",
                "city" => "Nova Ipixuna"
            ],
            [
                "uf" => "PA",
                "city" => "Nova Timboteua"
            ],
            [
                "uf" => "PA",
                "city" => "Novo Progresso"
            ],
            [
                "uf" => "PA",
                "city" => "Novo Repartimento"
            ],
            [
                "uf" => "PA",
                "city" => "Óbidos"
            ],
            [
                "uf" => "PA",
                "city" => "Oeiras do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Oriximiná"
            ],
            [
                "uf" => "PA",
                "city" => "Ourém"
            ],
            [
                "uf" => "PA",
                "city" => "Ourilândia do Norte"
            ],
            [
                "uf" => "PA",
                "city" => "Pacajá"
            ],
            [
                "uf" => "PA",
                "city" => "Palestina do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Paragominas"
            ],
            [
                "uf" => "PA",
                "city" => "Parauapebas"
            ],
            [
                "uf" => "PA",
                "city" => "Pau D´arco"
            ],
            [
                "uf" => "PA",
                "city" => "Peixe-boi"
            ],
            [
                "uf" => "PA",
                "city" => "Piçarra"
            ],
            [
                "uf" => "PA",
                "city" => "Placas"
            ],
            [
                "uf" => "PA",
                "city" => "Ponta de Pedras"
            ],
            [
                "uf" => "PA",
                "city" => "Portel"
            ],
            [
                "uf" => "PA",
                "city" => "Porto de Moz"
            ],
            [
                "uf" => "PA",
                "city" => "Prainha"
            ],
            [
                "uf" => "PA",
                "city" => "Primavera"
            ],
            [
                "uf" => "PA",
                "city" => "Quatipuru"
            ],
            [
                "uf" => "PA",
                "city" => "Redenção"
            ],
            [
                "uf" => "PA",
                "city" => "Rio Maria"
            ],
            [
                "uf" => "PA",
                "city" => "Rondon do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Rurópolis"
            ],
            [
                "uf" => "PA",
                "city" => "Salinópolis"
            ],
            [
                "uf" => "PA",
                "city" => "Salvaterra"
            ],
            [
                "uf" => "PA",
                "city" => "Santa Bárbara do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Santa Cruz do Arari"
            ],
            [
                "uf" => "PA",
                "city" => "Santa Isabel do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Santa Luzia do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Santa Maria Das Barreiras"
            ],
            [
                "uf" => "PA",
                "city" => "Santa Maria do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "Santana do Araguaia"
            ],
            [
                "uf" => "PA",
                "city" => "Santarém"
            ],
            [
                "uf" => "PA",
                "city" => "Santarém Novo"
            ],
            [
                "uf" => "PA",
                "city" => "Santo Antônio do Tauá"
            ],
            [
                "uf" => "PA",
                "city" => "São Caetano de Odivelas"
            ],
            [
                "uf" => "PA",
                "city" => "São Domingos do Araguaia"
            ],
            [
                "uf" => "PA",
                "city" => "São Domingos do Capim"
            ],
            [
                "uf" => "PA",
                "city" => "São Félix do Xingu"
            ],
            [
                "uf" => "PA",
                "city" => "São Francisco do Pará"
            ],
            [
                "uf" => "PA",
                "city" => "São Geraldo do Araguaia"
            ],
            [
                "uf" => "PA",
                "city" => "São João da Ponta"
            ],
            [
                "uf" => "PA",
                "city" => "São João de Pirabas"
            ],
            [
                "uf" => "PA",
                "city" => "São João do Araguaia"
            ],
            [
                "uf" => "PA",
                "city" => "São Miguel do Guamá"
            ],
            [
                "uf" => "PA",
                "city" => "São Sebastião da Boa Vista"
            ],
            [
                "uf" => "PA",
                "city" => "Sapucaia"
            ],
            [
                "uf" => "PA",
                "city" => "Senador José Porfírio"
            ],
            [
                "uf" => "PA",
                "city" => "Soure"
            ],
            [
                "uf" => "PA",
                "city" => "Tailândia"
            ],
            [
                "uf" => "PA",
                "city" => "Terra Alta"
            ],
            [
                "uf" => "PA",
                "city" => "Terra Santa"
            ],
            [
                "uf" => "PA",
                "city" => "Tomé-açu"
            ],
            [
                "uf" => "PA",
                "city" => "Tracuateua"
            ],
            [
                "uf" => "PA",
                "city" => "Trairão"
            ],
            [
                "uf" => "PA",
                "city" => "Tucumã"
            ],
            [
                "uf" => "PA",
                "city" => "Tucuruí"
            ],
            [
                "uf" => "PA",
                "city" => "Ulianópolis"
            ],
            [
                "uf" => "PA",
                "city" => "Uruará"
            ],
            [
                "uf" => "PA",
                "city" => "Vigia"
            ],
            [
                "uf" => "PA",
                "city" => "Viseu"
            ],
            [
                "uf" => "PA",
                "city" => "Vitória do Xingu"
            ],
            [
                "uf" => "PA",
                "city" => "Xinguara"
            ],
            [
                "uf" => "AP",
                "city" => "Serra do Navio"
            ],
            [
                "uf" => "AP",
                "city" => "Amapá"
            ],
            [
                "uf" => "AP",
                "city" => "Pedra Branca do Amapari"
            ],
            [
                "uf" => "AP",
                "city" => "Calçoene"
            ],
            [
                "uf" => "AP",
                "city" => "Cutias"
            ],
            [
                "uf" => "AP",
                "city" => "Ferreira Gomes"
            ],
            [
                "uf" => "AP",
                "city" => "Itaubal"
            ],
            [
                "uf" => "AP",
                "city" => "Laranjal do Jari"
            ],
            [
                "uf" => "AP",
                "city" => "Macapá"
            ],
            [
                "uf" => "AP",
                "city" => "Mazagão"
            ],
            [
                "uf" => "AP",
                "city" => "Oiapoque"
            ],
            [
                "uf" => "AP",
                "city" => "Porto Grande"
            ],
            [
                "uf" => "AP",
                "city" => "Pracuúba"
            ],
            [
                "uf" => "AP",
                "city" => "Santana"
            ],
            [
                "uf" => "AP",
                "city" => "Tartarugalzinho"
            ],
            [
                "uf" => "AP",
                "city" => "Vitória do Jari"
            ],
            [
                "uf" => "TO",
                "city" => "Abreulândia"
            ],
            [
                "uf" => "TO",
                "city" => "Aguiarnópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Aliança do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Almas"
            ],
            [
                "uf" => "TO",
                "city" => "Alvorada"
            ],
            [
                "uf" => "TO",
                "city" => "Ananás"
            ],
            [
                "uf" => "TO",
                "city" => "Angico"
            ],
            [
                "uf" => "TO",
                "city" => "Aparecida do Rio Negro"
            ],
            [
                "uf" => "TO",
                "city" => "Aragominas"
            ],
            [
                "uf" => "TO",
                "city" => "Araguacema"
            ],
            [
                "uf" => "TO",
                "city" => "Araguaçu"
            ],
            [
                "uf" => "TO",
                "city" => "Araguaína"
            ],
            [
                "uf" => "TO",
                "city" => "Araguanã"
            ],
            [
                "uf" => "TO",
                "city" => "Araguatins"
            ],
            [
                "uf" => "TO",
                "city" => "Arapoema"
            ],
            [
                "uf" => "TO",
                "city" => "Arraias"
            ],
            [
                "uf" => "TO",
                "city" => "Augustinópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Aurora do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Axixá do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Babaçulândia"
            ],
            [
                "uf" => "TO",
                "city" => "Bandeirantes do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Barra do Ouro"
            ],
            [
                "uf" => "TO",
                "city" => "Barrolândia"
            ],
            [
                "uf" => "TO",
                "city" => "Bernardo Sayão"
            ],
            [
                "uf" => "TO",
                "city" => "Bom Jesus do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Brasilândia do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Brejinho de Nazaré"
            ],
            [
                "uf" => "TO",
                "city" => "Buriti do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Cachoeirinha"
            ],
            [
                "uf" => "TO",
                "city" => "Campos Lindos"
            ],
            [
                "uf" => "TO",
                "city" => "Cariri do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Carmolândia"
            ],
            [
                "uf" => "TO",
                "city" => "Carrasco Bonito"
            ],
            [
                "uf" => "TO",
                "city" => "Caseara"
            ],
            [
                "uf" => "TO",
                "city" => "Centenário"
            ],
            [
                "uf" => "TO",
                "city" => "Chapada de Areia"
            ],
            [
                "uf" => "TO",
                "city" => "Chapada da Natividade"
            ],
            [
                "uf" => "TO",
                "city" => "Colinas do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Combinado"
            ],
            [
                "uf" => "TO",
                "city" => "Conceição do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Couto de Magalhães"
            ],
            [
                "uf" => "TO",
                "city" => "Cristalândia"
            ],
            [
                "uf" => "TO",
                "city" => "Crixás do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Darcinópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Dianópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Divinópolis do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Dois Irmãos do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Dueré"
            ],
            [
                "uf" => "TO",
                "city" => "Esperantina"
            ],
            [
                "uf" => "TO",
                "city" => "Fátima"
            ],
            [
                "uf" => "TO",
                "city" => "Figueirópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Filadélfia"
            ],
            [
                "uf" => "TO",
                "city" => "Formoso do Araguaia"
            ],
            [
                "uf" => "TO",
                "city" => "Fortaleza do Tabocão"
            ],
            [
                "uf" => "TO",
                "city" => "Goianorte"
            ],
            [
                "uf" => "TO",
                "city" => "Goiatins"
            ],
            [
                "uf" => "TO",
                "city" => "Guaraí"
            ],
            [
                "uf" => "TO",
                "city" => "Gurupi"
            ],
            [
                "uf" => "TO",
                "city" => "Ipueiras"
            ],
            [
                "uf" => "TO",
                "city" => "Itacajá"
            ],
            [
                "uf" => "TO",
                "city" => "Itaguatins"
            ],
            [
                "uf" => "TO",
                "city" => "Itapiratins"
            ],
            [
                "uf" => "TO",
                "city" => "Itaporã do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Jaú do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Juarina"
            ],
            [
                "uf" => "TO",
                "city" => "Lagoa da Confusão"
            ],
            [
                "uf" => "TO",
                "city" => "Lagoa do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Lajeado"
            ],
            [
                "uf" => "TO",
                "city" => "Lavandeira"
            ],
            [
                "uf" => "TO",
                "city" => "Lizarda"
            ],
            [
                "uf" => "TO",
                "city" => "Luzinópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Marianópolis do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Mateiros"
            ],
            [
                "uf" => "TO",
                "city" => "Maurilândia do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Miracema do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Miranorte"
            ],
            [
                "uf" => "TO",
                "city" => "Monte do Carmo"
            ],
            [
                "uf" => "TO",
                "city" => "Monte Santo do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Palmeiras do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Muricilândia"
            ],
            [
                "uf" => "TO",
                "city" => "Natividade"
            ],
            [
                "uf" => "TO",
                "city" => "Nazaré"
            ],
            [
                "uf" => "TO",
                "city" => "Nova Olinda"
            ],
            [
                "uf" => "TO",
                "city" => "Nova Rosalândia"
            ],
            [
                "uf" => "TO",
                "city" => "Novo Acordo"
            ],
            [
                "uf" => "TO",
                "city" => "Novo Alegre"
            ],
            [
                "uf" => "TO",
                "city" => "Novo Jardim"
            ],
            [
                "uf" => "TO",
                "city" => "Oliveira de Fátima"
            ],
            [
                "uf" => "TO",
                "city" => "Palmeirante"
            ],
            [
                "uf" => "TO",
                "city" => "Palmeirópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Paraíso do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Paranã"
            ],
            [
                "uf" => "TO",
                "city" => "Pau D´arco"
            ],
            [
                "uf" => "TO",
                "city" => "Pedro Afonso"
            ],
            [
                "uf" => "TO",
                "city" => "Peixe"
            ],
            [
                "uf" => "TO",
                "city" => "Pequizeiro"
            ],
            [
                "uf" => "TO",
                "city" => "Colméia"
            ],
            [
                "uf" => "TO",
                "city" => "Pindorama do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Piraquê"
            ],
            [
                "uf" => "TO",
                "city" => "Pium"
            ],
            [
                "uf" => "TO",
                "city" => "Ponte Alta do Bom Jesus"
            ],
            [
                "uf" => "TO",
                "city" => "Ponte Alta do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Porto Alegre do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Porto Nacional"
            ],
            [
                "uf" => "TO",
                "city" => "Praia Norte"
            ],
            [
                "uf" => "TO",
                "city" => "Presidente Kennedy"
            ],
            [
                "uf" => "TO",
                "city" => "Pugmil"
            ],
            [
                "uf" => "TO",
                "city" => "Recursolândia"
            ],
            [
                "uf" => "TO",
                "city" => "Riachinho"
            ],
            [
                "uf" => "TO",
                "city" => "Rio da Conceição"
            ],
            [
                "uf" => "TO",
                "city" => "Rio Dos Bois"
            ],
            [
                "uf" => "TO",
                "city" => "Rio Sono"
            ],
            [
                "uf" => "TO",
                "city" => "Sampaio"
            ],
            [
                "uf" => "TO",
                "city" => "Sandolândia"
            ],
            [
                "uf" => "TO",
                "city" => "Santa fé do Araguaia"
            ],
            [
                "uf" => "TO",
                "city" => "Santa Maria do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Santa Rita do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Santa Rosa do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Santa Tereza do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Santa Terezinha do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "São Bento do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "São Félix do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "São Miguel do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "São Salvador do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "São Sebastião do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "São Valério da Natividade"
            ],
            [
                "uf" => "TO",
                "city" => "Silvanópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Sítio Novo do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Sucupira"
            ],
            [
                "uf" => "TO",
                "city" => "Taguatinga"
            ],
            [
                "uf" => "TO",
                "city" => "Taipas do Tocantins"
            ],
            [
                "uf" => "TO",
                "city" => "Talismã"
            ],
            [
                "uf" => "TO",
                "city" => "Palmas"
            ],
            [
                "uf" => "TO",
                "city" => "Tocantínia"
            ],
            [
                "uf" => "TO",
                "city" => "Tocantinópolis"
            ],
            [
                "uf" => "TO",
                "city" => "Tupirama"
            ],
            [
                "uf" => "TO",
                "city" => "Tupiratins"
            ],
            [
                "uf" => "TO",
                "city" => "Wanderlândia"
            ],
            [
                "uf" => "TO",
                "city" => "Xambioá"
            ],
            [
                "uf" => "MA",
                "city" => "Açailândia"
            ],
            [
                "uf" => "MA",
                "city" => "Afonso Cunha"
            ],
            [
                "uf" => "MA",
                "city" => "Água Doce do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Alcântara"
            ],
            [
                "uf" => "MA",
                "city" => "Aldeias Altas"
            ],
            [
                "uf" => "MA",
                "city" => "Altamira do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Alto Alegre do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Alto Alegre do Pindaré"
            ],
            [
                "uf" => "MA",
                "city" => "Alto Parnaíba"
            ],
            [
                "uf" => "MA",
                "city" => "Amapá do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Amarante do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Anajatuba"
            ],
            [
                "uf" => "MA",
                "city" => "Anapurus"
            ],
            [
                "uf" => "MA",
                "city" => "Apicum-açu"
            ],
            [
                "uf" => "MA",
                "city" => "Araguanã"
            ],
            [
                "uf" => "MA",
                "city" => "Araioses"
            ],
            [
                "uf" => "MA",
                "city" => "Arame"
            ],
            [
                "uf" => "MA",
                "city" => "Arari"
            ],
            [
                "uf" => "MA",
                "city" => "Axixá"
            ],
            [
                "uf" => "MA",
                "city" => "Bacabal"
            ],
            [
                "uf" => "MA",
                "city" => "Bacabeira"
            ],
            [
                "uf" => "MA",
                "city" => "Bacuri"
            ],
            [
                "uf" => "MA",
                "city" => "Bacurituba"
            ],
            [
                "uf" => "MA",
                "city" => "Balsas"
            ],
            [
                "uf" => "MA",
                "city" => "Barão de Grajaú"
            ],
            [
                "uf" => "MA",
                "city" => "Barra do Corda"
            ],
            [
                "uf" => "MA",
                "city" => "Barreirinhas"
            ],
            [
                "uf" => "MA",
                "city" => "Belágua"
            ],
            [
                "uf" => "MA",
                "city" => "Bela Vista do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Benedito Leite"
            ],
            [
                "uf" => "MA",
                "city" => "Bequimão"
            ],
            [
                "uf" => "MA",
                "city" => "Bernardo do Mearim"
            ],
            [
                "uf" => "MA",
                "city" => "Boa Vista do Gurupi"
            ],
            [
                "uf" => "MA",
                "city" => "Bom Jardim"
            ],
            [
                "uf" => "MA",
                "city" => "Bom Jesus Das Selvas"
            ],
            [
                "uf" => "MA",
                "city" => "Bom Lugar"
            ],
            [
                "uf" => "MA",
                "city" => "Brejo"
            ],
            [
                "uf" => "MA",
                "city" => "Brejo de Areia"
            ],
            [
                "uf" => "MA",
                "city" => "Buriti"
            ],
            [
                "uf" => "MA",
                "city" => "Buriti Bravo"
            ],
            [
                "uf" => "MA",
                "city" => "Buriticupu"
            ],
            [
                "uf" => "MA",
                "city" => "Buritirana"
            ],
            [
                "uf" => "MA",
                "city" => "Cachoeira Grande"
            ],
            [
                "uf" => "MA",
                "city" => "Cajapió"
            ],
            [
                "uf" => "MA",
                "city" => "Cajari"
            ],
            [
                "uf" => "MA",
                "city" => "Campestre do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Cândido Mendes"
            ],
            [
                "uf" => "MA",
                "city" => "Cantanhede"
            ],
            [
                "uf" => "MA",
                "city" => "Capinzal do Norte"
            ],
            [
                "uf" => "MA",
                "city" => "Carolina"
            ],
            [
                "uf" => "MA",
                "city" => "Carutapera"
            ],
            [
                "uf" => "MA",
                "city" => "Caxias"
            ],
            [
                "uf" => "MA",
                "city" => "Cedral"
            ],
            [
                "uf" => "MA",
                "city" => "Central do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Centro do Guilherme"
            ],
            [
                "uf" => "MA",
                "city" => "Centro Novo do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Chapadinha"
            ],
            [
                "uf" => "MA",
                "city" => "Cidelândia"
            ],
            [
                "uf" => "MA",
                "city" => "Codó"
            ],
            [
                "uf" => "MA",
                "city" => "Coelho Neto"
            ],
            [
                "uf" => "MA",
                "city" => "Colinas"
            ],
            [
                "uf" => "MA",
                "city" => "Conceição do Lago-açu"
            ],
            [
                "uf" => "MA",
                "city" => "Coroatá"
            ],
            [
                "uf" => "MA",
                "city" => "Cururupu"
            ],
            [
                "uf" => "MA",
                "city" => "Davinópolis"
            ],
            [
                "uf" => "MA",
                "city" => "Dom Pedro"
            ],
            [
                "uf" => "MA",
                "city" => "Duque Bacelar"
            ],
            [
                "uf" => "MA",
                "city" => "Esperantinópolis"
            ],
            [
                "uf" => "MA",
                "city" => "Estreito"
            ],
            [
                "uf" => "MA",
                "city" => "Feira Nova do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Fernando Falcão"
            ],
            [
                "uf" => "MA",
                "city" => "Formosa da Serra Negra"
            ],
            [
                "uf" => "MA",
                "city" => "Fortaleza Dos Nogueiras"
            ],
            [
                "uf" => "MA",
                "city" => "Fortuna"
            ],
            [
                "uf" => "MA",
                "city" => "Godofredo Viana"
            ],
            [
                "uf" => "MA",
                "city" => "Gonçalves Dias"
            ],
            [
                "uf" => "MA",
                "city" => "Governador Archer"
            ],
            [
                "uf" => "MA",
                "city" => "Governador Edison Lobão"
            ],
            [
                "uf" => "MA",
                "city" => "Governador Eugênio Barros"
            ],
            [
                "uf" => "MA",
                "city" => "Governador Luiz Rocha"
            ],
            [
                "uf" => "MA",
                "city" => "Governador Newton Bello"
            ],
            [
                "uf" => "MA",
                "city" => "Governador Nunes Freire"
            ],
            [
                "uf" => "MA",
                "city" => "Graça Aranha"
            ],
            [
                "uf" => "MA",
                "city" => "Grajaú"
            ],
            [
                "uf" => "MA",
                "city" => "Guimarães"
            ],
            [
                "uf" => "MA",
                "city" => "Humberto de Campos"
            ],
            [
                "uf" => "MA",
                "city" => "Icatu"
            ],
            [
                "uf" => "MA",
                "city" => "Igarapé do Meio"
            ],
            [
                "uf" => "MA",
                "city" => "Igarapé Grande"
            ],
            [
                "uf" => "MA",
                "city" => "Imperatriz"
            ],
            [
                "uf" => "MA",
                "city" => "Itaipava do Grajaú"
            ],
            [
                "uf" => "MA",
                "city" => "Itapecuru Mirim"
            ],
            [
                "uf" => "MA",
                "city" => "Itinga do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Jatobá"
            ],
            [
                "uf" => "MA",
                "city" => "Jenipapo Dos Vieiras"
            ],
            [
                "uf" => "MA",
                "city" => "João Lisboa"
            ],
            [
                "uf" => "MA",
                "city" => "Joselândia"
            ],
            [
                "uf" => "MA",
                "city" => "Junco do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Lago da Pedra"
            ],
            [
                "uf" => "MA",
                "city" => "Lago do Junco"
            ],
            [
                "uf" => "MA",
                "city" => "Lago Verde"
            ],
            [
                "uf" => "MA",
                "city" => "Lagoa do Mato"
            ],
            [
                "uf" => "MA",
                "city" => "Lago Dos Rodrigues"
            ],
            [
                "uf" => "MA",
                "city" => "Lagoa Grande do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Lajeado Novo"
            ],
            [
                "uf" => "MA",
                "city" => "Lima Campos"
            ],
            [
                "uf" => "MA",
                "city" => "Loreto"
            ],
            [
                "uf" => "MA",
                "city" => "Luís Domingues"
            ],
            [
                "uf" => "MA",
                "city" => "Magalhães de Almeida"
            ],
            [
                "uf" => "MA",
                "city" => "Maracaçumé"
            ],
            [
                "uf" => "MA",
                "city" => "Marajá do Sena"
            ],
            [
                "uf" => "MA",
                "city" => "Maranhãozinho"
            ],
            [
                "uf" => "MA",
                "city" => "Mata Roma"
            ],
            [
                "uf" => "MA",
                "city" => "Matinha"
            ],
            [
                "uf" => "MA",
                "city" => "Matões"
            ],
            [
                "uf" => "MA",
                "city" => "Matões do Norte"
            ],
            [
                "uf" => "MA",
                "city" => "Milagres do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Mirador"
            ],
            [
                "uf" => "MA",
                "city" => "Miranda do Norte"
            ],
            [
                "uf" => "MA",
                "city" => "Mirinzal"
            ],
            [
                "uf" => "MA",
                "city" => "Monção"
            ],
            [
                "uf" => "MA",
                "city" => "Montes Altos"
            ],
            [
                "uf" => "MA",
                "city" => "Morros"
            ],
            [
                "uf" => "MA",
                "city" => "Nina Rodrigues"
            ],
            [
                "uf" => "MA",
                "city" => "Nova Colinas"
            ],
            [
                "uf" => "MA",
                "city" => "Nova Iorque"
            ],
            [
                "uf" => "MA",
                "city" => "Nova Olinda do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Olho D´água Das Cunhãs"
            ],
            [
                "uf" => "MA",
                "city" => "Olinda Nova do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Paço do Lumiar"
            ],
            [
                "uf" => "MA",
                "city" => "Palmeirândia"
            ],
            [
                "uf" => "MA",
                "city" => "Paraibano"
            ],
            [
                "uf" => "MA",
                "city" => "Parnarama"
            ],
            [
                "uf" => "MA",
                "city" => "Passagem Franca"
            ],
            [
                "uf" => "MA",
                "city" => "Pastos Bons"
            ],
            [
                "uf" => "MA",
                "city" => "Paulino Neves"
            ],
            [
                "uf" => "MA",
                "city" => "Paulo Ramos"
            ],
            [
                "uf" => "MA",
                "city" => "Pedreiras"
            ],
            [
                "uf" => "MA",
                "city" => "Pedro do Rosário"
            ],
            [
                "uf" => "MA",
                "city" => "Penalva"
            ],
            [
                "uf" => "MA",
                "city" => "Peri Mirim"
            ],
            [
                "uf" => "MA",
                "city" => "Peritoró"
            ],
            [
                "uf" => "MA",
                "city" => "Pindaré-mirim"
            ],
            [
                "uf" => "MA",
                "city" => "Pinheiro"
            ],
            [
                "uf" => "MA",
                "city" => "Pio Xii"
            ],
            [
                "uf" => "MA",
                "city" => "Pirapemas"
            ],
            [
                "uf" => "MA",
                "city" => "Poção de Pedras"
            ],
            [
                "uf" => "MA",
                "city" => "Porto Franco"
            ],
            [
                "uf" => "MA",
                "city" => "Porto Rico do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Presidente Dutra"
            ],
            [
                "uf" => "MA",
                "city" => "Presidente Juscelino"
            ],
            [
                "uf" => "MA",
                "city" => "Presidente Médici"
            ],
            [
                "uf" => "MA",
                "city" => "Presidente Sarney"
            ],
            [
                "uf" => "MA",
                "city" => "Presidente Vargas"
            ],
            [
                "uf" => "MA",
                "city" => "Primeira Cruz"
            ],
            [
                "uf" => "MA",
                "city" => "Raposa"
            ],
            [
                "uf" => "MA",
                "city" => "Riachão"
            ],
            [
                "uf" => "MA",
                "city" => "Ribamar Fiquene"
            ],
            [
                "uf" => "MA",
                "city" => "Rosário"
            ],
            [
                "uf" => "MA",
                "city" => "Sambaíba"
            ],
            [
                "uf" => "MA",
                "city" => "Santa Filomena do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Santa Helena"
            ],
            [
                "uf" => "MA",
                "city" => "Santa Inês"
            ],
            [
                "uf" => "MA",
                "city" => "Santa Luzia"
            ],
            [
                "uf" => "MA",
                "city" => "Santa Luzia do Paruá"
            ],
            [
                "uf" => "MA",
                "city" => "Santa Quitéria do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Santa Rita"
            ],
            [
                "uf" => "MA",
                "city" => "Santana do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Santo Amaro do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Santo Antônio Dos Lopes"
            ],
            [
                "uf" => "MA",
                "city" => "São Benedito do Rio Preto"
            ],
            [
                "uf" => "MA",
                "city" => "São Bento"
            ],
            [
                "uf" => "MA",
                "city" => "São Bernardo"
            ],
            [
                "uf" => "MA",
                "city" => "São Domingos do Azeitão"
            ],
            [
                "uf" => "MA",
                "city" => "São Domingos do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "São Félix de Balsas"
            ],
            [
                "uf" => "MA",
                "city" => "São Francisco do Brejão"
            ],
            [
                "uf" => "MA",
                "city" => "São Francisco do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "São João Batista"
            ],
            [
                "uf" => "MA",
                "city" => "São João do Carú"
            ],
            [
                "uf" => "MA",
                "city" => "São João do Paraíso"
            ],
            [
                "uf" => "MA",
                "city" => "São João do Soter"
            ],
            [
                "uf" => "MA",
                "city" => "São João Dos Patos"
            ],
            [
                "uf" => "MA",
                "city" => "São José de Ribamar"
            ],
            [
                "uf" => "MA",
                "city" => "São José Dos Basílios"
            ],
            [
                "uf" => "MA",
                "city" => "São Luís"
            ],
            [
                "uf" => "MA",
                "city" => "São Luís Gonzaga do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "São Mateus do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "São Pedro da Água Branca"
            ],
            [
                "uf" => "MA",
                "city" => "São Pedro Dos Crentes"
            ],
            [
                "uf" => "MA",
                "city" => "São Raimundo Das Mangabeiras"
            ],
            [
                "uf" => "MA",
                "city" => "São Raimundo do Doca Bezerra"
            ],
            [
                "uf" => "MA",
                "city" => "São Roberto"
            ],
            [
                "uf" => "MA",
                "city" => "São Vicente Ferrer"
            ],
            [
                "uf" => "MA",
                "city" => "Satubinha"
            ],
            [
                "uf" => "MA",
                "city" => "Senador Alexandre Costa"
            ],
            [
                "uf" => "MA",
                "city" => "Senador la Rocque"
            ],
            [
                "uf" => "MA",
                "city" => "Serrano do Maranhão"
            ],
            [
                "uf" => "MA",
                "city" => "Sítio Novo"
            ],
            [
                "uf" => "MA",
                "city" => "Sucupira do Norte"
            ],
            [
                "uf" => "MA",
                "city" => "Sucupira do Riachão"
            ],
            [
                "uf" => "MA",
                "city" => "Tasso Fragoso"
            ],
            [
                "uf" => "MA",
                "city" => "Timbiras"
            ],
            [
                "uf" => "MA",
                "city" => "Timon"
            ],
            [
                "uf" => "MA",
                "city" => "Trizidela do Vale"
            ],
            [
                "uf" => "MA",
                "city" => "Tufilândia"
            ],
            [
                "uf" => "MA",
                "city" => "Tuntum"
            ],
            [
                "uf" => "MA",
                "city" => "Turiaçu"
            ],
            [
                "uf" => "MA",
                "city" => "Turilândia"
            ],
            [
                "uf" => "MA",
                "city" => "Tutóia"
            ],
            [
                "uf" => "MA",
                "city" => "Urbano Santos"
            ],
            [
                "uf" => "MA",
                "city" => "Vargem Grande"
            ],
            [
                "uf" => "MA",
                "city" => "Viana"
            ],
            [
                "uf" => "MA",
                "city" => "Vila Nova Dos Martírios"
            ],
            [
                "uf" => "MA",
                "city" => "Vitória do Mearim"
            ],
            [
                "uf" => "MA",
                "city" => "Vitorino Freire"
            ],
            [
                "uf" => "MA",
                "city" => "zé Doca"
            ],
            [
                "uf" => "PI",
                "city" => "Acauã"
            ],
            [
                "uf" => "PI",
                "city" => "Agricolândia"
            ],
            [
                "uf" => "PI",
                "city" => "Água Branca"
            ],
            [
                "uf" => "PI",
                "city" => "Alagoinha do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Alegrete do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Alto Longá"
            ],
            [
                "uf" => "PI",
                "city" => "Altos"
            ],
            [
                "uf" => "PI",
                "city" => "Alvorada do Gurguéia"
            ],
            [
                "uf" => "PI",
                "city" => "Amarante"
            ],
            [
                "uf" => "PI",
                "city" => "Angical do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Anísio de Abreu"
            ],
            [
                "uf" => "PI",
                "city" => "Antônio Almeida"
            ],
            [
                "uf" => "PI",
                "city" => "Aroazes"
            ],
            [
                "uf" => "PI",
                "city" => "Aroeiras do Itaim"
            ],
            [
                "uf" => "PI",
                "city" => "Arraial"
            ],
            [
                "uf" => "PI",
                "city" => "Assunção do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Avelino Lopes"
            ],
            [
                "uf" => "PI",
                "city" => "Baixa Grande do Ribeiro"
            ],
            [
                "uf" => "PI",
                "city" => "Barra D´alcântara"
            ],
            [
                "uf" => "PI",
                "city" => "Barras"
            ],
            [
                "uf" => "PI",
                "city" => "Barreiras do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Barro Duro"
            ],
            [
                "uf" => "PI",
                "city" => "Batalha"
            ],
            [
                "uf" => "PI",
                "city" => "Bela Vista do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Belém do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Beneditinos"
            ],
            [
                "uf" => "PI",
                "city" => "Bertolínia"
            ],
            [
                "uf" => "PI",
                "city" => "Betânia do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Boa Hora"
            ],
            [
                "uf" => "PI",
                "city" => "Bocaina"
            ],
            [
                "uf" => "PI",
                "city" => "Bom Jesus"
            ],
            [
                "uf" => "PI",
                "city" => "Bom Princípio do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Bonfim do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Boqueirão do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Brasileira"
            ],
            [
                "uf" => "PI",
                "city" => "Brejo do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Buriti Dos Lopes"
            ],
            [
                "uf" => "PI",
                "city" => "Buriti Dos Montes"
            ],
            [
                "uf" => "PI",
                "city" => "Cabeceiras do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Cajazeiras do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Cajueiro da Praia"
            ],
            [
                "uf" => "PI",
                "city" => "Caldeirão Grande do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Campinas do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Campo Alegre do Fidalgo"
            ],
            [
                "uf" => "PI",
                "city" => "Campo Grande do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Campo Largo do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Campo Maior"
            ],
            [
                "uf" => "PI",
                "city" => "Canavieira"
            ],
            [
                "uf" => "PI",
                "city" => "Canto do Buriti"
            ],
            [
                "uf" => "PI",
                "city" => "Capitão de Campos"
            ],
            [
                "uf" => "PI",
                "city" => "Capitão Gervásio Oliveira"
            ],
            [
                "uf" => "PI",
                "city" => "Caracol"
            ],
            [
                "uf" => "PI",
                "city" => "Caraúbas do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Caridade do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Castelo do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Caxingó"
            ],
            [
                "uf" => "PI",
                "city" => "Cocal"
            ],
            [
                "uf" => "PI",
                "city" => "Cocal de Telha"
            ],
            [
                "uf" => "PI",
                "city" => "Cocal Dos Alves"
            ],
            [
                "uf" => "PI",
                "city" => "Coivaras"
            ],
            [
                "uf" => "PI",
                "city" => "Colônia do Gurguéia"
            ],
            [
                "uf" => "PI",
                "city" => "Colônia do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Conceição do Canindé"
            ],
            [
                "uf" => "PI",
                "city" => "Coronel José Dias"
            ],
            [
                "uf" => "PI",
                "city" => "Corrente"
            ],
            [
                "uf" => "PI",
                "city" => "Cristalândia do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Cristino Castro"
            ],
            [
                "uf" => "PI",
                "city" => "Curimatá"
            ],
            [
                "uf" => "PI",
                "city" => "Currais"
            ],
            [
                "uf" => "PI",
                "city" => "Curralinhos"
            ],
            [
                "uf" => "PI",
                "city" => "Curral Novo do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Demerval Lobão"
            ],
            [
                "uf" => "PI",
                "city" => "Dirceu Arcoverde"
            ],
            [
                "uf" => "PI",
                "city" => "Dom Expedito Lopes"
            ],
            [
                "uf" => "PI",
                "city" => "Domingos Mourão"
            ],
            [
                "uf" => "PI",
                "city" => "Dom Inocêncio"
            ],
            [
                "uf" => "PI",
                "city" => "Elesbão Veloso"
            ],
            [
                "uf" => "PI",
                "city" => "Eliseu Martins"
            ],
            [
                "uf" => "PI",
                "city" => "Esperantina"
            ],
            [
                "uf" => "PI",
                "city" => "Fartura do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Flores do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Floresta do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Floriano"
            ],
            [
                "uf" => "PI",
                "city" => "Francinópolis"
            ],
            [
                "uf" => "PI",
                "city" => "Francisco Ayres"
            ],
            [
                "uf" => "PI",
                "city" => "Francisco Macedo"
            ],
            [
                "uf" => "PI",
                "city" => "Francisco Santos"
            ],
            [
                "uf" => "PI",
                "city" => "Fronteiras"
            ],
            [
                "uf" => "PI",
                "city" => "Geminiano"
            ],
            [
                "uf" => "PI",
                "city" => "Gilbués"
            ],
            [
                "uf" => "PI",
                "city" => "Guadalupe"
            ],
            [
                "uf" => "PI",
                "city" => "Guaribas"
            ],
            [
                "uf" => "PI",
                "city" => "Hugo Napoleão"
            ],
            [
                "uf" => "PI",
                "city" => "Ilha Grande"
            ],
            [
                "uf" => "PI",
                "city" => "Inhuma"
            ],
            [
                "uf" => "PI",
                "city" => "Ipiranga do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Isaías Coelho"
            ],
            [
                "uf" => "PI",
                "city" => "Itainópolis"
            ],
            [
                "uf" => "PI",
                "city" => "Itaueira"
            ],
            [
                "uf" => "PI",
                "city" => "Jacobina do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Jaicós"
            ],
            [
                "uf" => "PI",
                "city" => "Jardim do Mulato"
            ],
            [
                "uf" => "PI",
                "city" => "Jatobá do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Jerumenha"
            ],
            [
                "uf" => "PI",
                "city" => "João Costa"
            ],
            [
                "uf" => "PI",
                "city" => "Joaquim Pires"
            ],
            [
                "uf" => "PI",
                "city" => "Joca Marques"
            ],
            [
                "uf" => "PI",
                "city" => "José de Freitas"
            ],
            [
                "uf" => "PI",
                "city" => "Juazeiro do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Júlio Borges"
            ],
            [
                "uf" => "PI",
                "city" => "Jurema"
            ],
            [
                "uf" => "PI",
                "city" => "Lagoinha do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Lagoa Alegre"
            ],
            [
                "uf" => "PI",
                "city" => "Lagoa do Barro do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Lagoa de São Francisco"
            ],
            [
                "uf" => "PI",
                "city" => "Lagoa do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Lagoa do Sítio"
            ],
            [
                "uf" => "PI",
                "city" => "Landri Sales"
            ],
            [
                "uf" => "PI",
                "city" => "Luís Correia"
            ],
            [
                "uf" => "PI",
                "city" => "Luzilândia"
            ],
            [
                "uf" => "PI",
                "city" => "Madeiro"
            ],
            [
                "uf" => "PI",
                "city" => "Manoel Emídio"
            ],
            [
                "uf" => "PI",
                "city" => "Marcolândia"
            ],
            [
                "uf" => "PI",
                "city" => "Marcos Parente"
            ],
            [
                "uf" => "PI",
                "city" => "Massapê do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Matias Olímpio"
            ],
            [
                "uf" => "PI",
                "city" => "Miguel Alves"
            ],
            [
                "uf" => "PI",
                "city" => "Miguel Leão"
            ],
            [
                "uf" => "PI",
                "city" => "Milton Brandão"
            ],
            [
                "uf" => "PI",
                "city" => "Monsenhor Gil"
            ],
            [
                "uf" => "PI",
                "city" => "Monsenhor Hipólito"
            ],
            [
                "uf" => "PI",
                "city" => "Monte Alegre do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Morro Cabeça no Tempo"
            ],
            [
                "uf" => "PI",
                "city" => "Morro do Chapéu do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Murici Dos Portelas"
            ],
            [
                "uf" => "PI",
                "city" => "Nazaré do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Nazária"
            ],
            [
                "uf" => "PI",
                "city" => "Nossa Senhora de Nazaré"
            ],
            [
                "uf" => "PI",
                "city" => "Nossa Senhora Dos Remédios"
            ],
            [
                "uf" => "PI",
                "city" => "Novo Oriente do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Novo Santo Antônio"
            ],
            [
                "uf" => "PI",
                "city" => "Oeiras"
            ],
            [
                "uf" => "PI",
                "city" => "Olho D´água do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Padre Marcos"
            ],
            [
                "uf" => "PI",
                "city" => "Paes Landim"
            ],
            [
                "uf" => "PI",
                "city" => "Pajeú do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Palmeira do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Palmeirais"
            ],
            [
                "uf" => "PI",
                "city" => "Paquetá"
            ],
            [
                "uf" => "PI",
                "city" => "Parnaguá"
            ],
            [
                "uf" => "PI",
                "city" => "Parnaíba"
            ],
            [
                "uf" => "PI",
                "city" => "Passagem Franca do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Patos do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Pau D´arco do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Paulistana"
            ],
            [
                "uf" => "PI",
                "city" => "Pavussu"
            ],
            [
                "uf" => "PI",
                "city" => "Pedro ii"
            ],
            [
                "uf" => "PI",
                "city" => "Pedro Laurentino"
            ],
            [
                "uf" => "PI",
                "city" => "Nova Santa Rita"
            ],
            [
                "uf" => "PI",
                "city" => "Picos"
            ],
            [
                "uf" => "PI",
                "city" => "Pimenteiras"
            ],
            [
                "uf" => "PI",
                "city" => "Pio ix"
            ],
            [
                "uf" => "PI",
                "city" => "Piracuruca"
            ],
            [
                "uf" => "PI",
                "city" => "Piripiri"
            ],
            [
                "uf" => "PI",
                "city" => "Porto"
            ],
            [
                "uf" => "PI",
                "city" => "Porto Alegre do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Prata do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Queimada Nova"
            ],
            [
                "uf" => "PI",
                "city" => "Redenção do Gurguéia"
            ],
            [
                "uf" => "PI",
                "city" => "Regeneração"
            ],
            [
                "uf" => "PI",
                "city" => "Riacho Frio"
            ],
            [
                "uf" => "PI",
                "city" => "Ribeira do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Ribeiro Gonçalves"
            ],
            [
                "uf" => "PI",
                "city" => "Rio Grande do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Santa Cruz do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Santa Cruz Dos Milagres"
            ],
            [
                "uf" => "PI",
                "city" => "Santa Filomena"
            ],
            [
                "uf" => "PI",
                "city" => "Santa Luz"
            ],
            [
                "uf" => "PI",
                "city" => "Santana do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Santa Rosa do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Santo Antônio de Lisboa"
            ],
            [
                "uf" => "PI",
                "city" => "Santo Antônio Dos Milagres"
            ],
            [
                "uf" => "PI",
                "city" => "Santo Inácio do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Braz do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Félix do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Francisco de Assis do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Francisco do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Gonçalo do Gurguéia"
            ],
            [
                "uf" => "PI",
                "city" => "São Gonçalo do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São João da Canabrava"
            ],
            [
                "uf" => "PI",
                "city" => "São João da Fronteira"
            ],
            [
                "uf" => "PI",
                "city" => "São João da Serra"
            ],
            [
                "uf" => "PI",
                "city" => "São João da Varjota"
            ],
            [
                "uf" => "PI",
                "city" => "São João do Arraial"
            ],
            [
                "uf" => "PI",
                "city" => "São João do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São José do Divino"
            ],
            [
                "uf" => "PI",
                "city" => "São José do Peixe"
            ],
            [
                "uf" => "PI",
                "city" => "São José do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Julião"
            ],
            [
                "uf" => "PI",
                "city" => "São Lourenço do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Luis do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Miguel da Baixa Grande"
            ],
            [
                "uf" => "PI",
                "city" => "São Miguel do Fidalgo"
            ],
            [
                "uf" => "PI",
                "city" => "São Miguel do Tapuio"
            ],
            [
                "uf" => "PI",
                "city" => "São Pedro do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "São Raimundo Nonato"
            ],
            [
                "uf" => "PI",
                "city" => "Sebastião Barros"
            ],
            [
                "uf" => "PI",
                "city" => "Sebastião Leal"
            ],
            [
                "uf" => "PI",
                "city" => "Sigefredo Pacheco"
            ],
            [
                "uf" => "PI",
                "city" => "Simões"
            ],
            [
                "uf" => "PI",
                "city" => "Simplício Mendes"
            ],
            [
                "uf" => "PI",
                "city" => "Socorro do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Sussuapara"
            ],
            [
                "uf" => "PI",
                "city" => "Tamboril do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Tanque do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Teresina"
            ],
            [
                "uf" => "PI",
                "city" => "União"
            ],
            [
                "uf" => "PI",
                "city" => "Uruçuí"
            ],
            [
                "uf" => "PI",
                "city" => "Valença do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Várzea Branca"
            ],
            [
                "uf" => "PI",
                "city" => "Várzea Grande"
            ],
            [
                "uf" => "PI",
                "city" => "Vera Mendes"
            ],
            [
                "uf" => "PI",
                "city" => "Vila Nova do Piauí"
            ],
            [
                "uf" => "PI",
                "city" => "Wall Ferraz"
            ],
            [
                "uf" => "CE",
                "city" => "Abaiara"
            ],
            [
                "uf" => "CE",
                "city" => "Acarapé"
            ],
            [
                "uf" => "CE",
                "city" => "Acaraú"
            ],
            [
                "uf" => "CE",
                "city" => "Acopiara"
            ],
            [
                "uf" => "CE",
                "city" => "Aiuaba"
            ],
            [
                "uf" => "CE",
                "city" => "Alcântaras"
            ],
            [
                "uf" => "CE",
                "city" => "Altaneira"
            ],
            [
                "uf" => "CE",
                "city" => "Alto Santo"
            ],
            [
                "uf" => "CE",
                "city" => "Amontada"
            ],
            [
                "uf" => "CE",
                "city" => "Antonina do Norte"
            ],
            [
                "uf" => "CE",
                "city" => "Apuiarés"
            ],
            [
                "uf" => "CE",
                "city" => "Aquiraz"
            ],
            [
                "uf" => "CE",
                "city" => "Aracati"
            ],
            [
                "uf" => "CE",
                "city" => "Aracoiaba"
            ],
            [
                "uf" => "CE",
                "city" => "Ararendá"
            ],
            [
                "uf" => "CE",
                "city" => "Araripe"
            ],
            [
                "uf" => "CE",
                "city" => "Aratuba"
            ],
            [
                "uf" => "CE",
                "city" => "Arneiroz"
            ],
            [
                "uf" => "CE",
                "city" => "Assaré"
            ],
            [
                "uf" => "CE",
                "city" => "Aurora"
            ],
            [
                "uf" => "CE",
                "city" => "Baixio"
            ],
            [
                "uf" => "CE",
                "city" => "Banabuiú"
            ],
            [
                "uf" => "CE",
                "city" => "Barbalha"
            ],
            [
                "uf" => "CE",
                "city" => "Barreira"
            ],
            [
                "uf" => "CE",
                "city" => "Barro"
            ],
            [
                "uf" => "CE",
                "city" => "Barroquinha"
            ],
            [
                "uf" => "CE",
                "city" => "Baturité"
            ],
            [
                "uf" => "CE",
                "city" => "Beberibe"
            ],
            [
                "uf" => "CE",
                "city" => "Bela Cruz"
            ],
            [
                "uf" => "CE",
                "city" => "Boa Viagem"
            ],
            [
                "uf" => "CE",
                "city" => "Brejo Santo"
            ],
            [
                "uf" => "CE",
                "city" => "Camocim"
            ],
            [
                "uf" => "CE",
                "city" => "Campos Sales"
            ],
            [
                "uf" => "CE",
                "city" => "Canindé"
            ],
            [
                "uf" => "CE",
                "city" => "Capistrano"
            ],
            [
                "uf" => "CE",
                "city" => "Caridade"
            ],
            [
                "uf" => "CE",
                "city" => "Cariré"
            ],
            [
                "uf" => "CE",
                "city" => "Caririaçu"
            ],
            [
                "uf" => "CE",
                "city" => "Cariús"
            ],
            [
                "uf" => "CE",
                "city" => "Carnaubal"
            ],
            [
                "uf" => "CE",
                "city" => "Cascavel"
            ],
            [
                "uf" => "CE",
                "city" => "Catarina"
            ],
            [
                "uf" => "CE",
                "city" => "Catunda"
            ],
            [
                "uf" => "CE",
                "city" => "Caucaia"
            ],
            [
                "uf" => "CE",
                "city" => "Cedro"
            ],
            [
                "uf" => "CE",
                "city" => "Chaval"
            ],
            [
                "uf" => "CE",
                "city" => "Choró"
            ],
            [
                "uf" => "CE",
                "city" => "Chorozinho"
            ],
            [
                "uf" => "CE",
                "city" => "Coreaú"
            ],
            [
                "uf" => "CE",
                "city" => "Crateús"
            ],
            [
                "uf" => "CE",
                "city" => "Crato"
            ],
            [
                "uf" => "CE",
                "city" => "Croatá"
            ],
            [
                "uf" => "CE",
                "city" => "Cruz"
            ],
            [
                "uf" => "CE",
                "city" => "Deputado Irapuan Pinheiro"
            ],
            [
                "uf" => "CE",
                "city" => "Ererê"
            ],
            [
                "uf" => "CE",
                "city" => "Eusébio"
            ],
            [
                "uf" => "CE",
                "city" => "Farias Brito"
            ],
            [
                "uf" => "CE",
                "city" => "Forquilha"
            ],
            [
                "uf" => "CE",
                "city" => "Fortaleza"
            ],
            [
                "uf" => "CE",
                "city" => "Fortim"
            ],
            [
                "uf" => "CE",
                "city" => "Frecheirinha"
            ],
            [
                "uf" => "CE",
                "city" => "General Sampaio"
            ],
            [
                "uf" => "CE",
                "city" => "Graça"
            ],
            [
                "uf" => "CE",
                "city" => "Granja"
            ],
            [
                "uf" => "CE",
                "city" => "Granjeiro"
            ],
            [
                "uf" => "CE",
                "city" => "Groaíras"
            ],
            [
                "uf" => "CE",
                "city" => "Guaiúba"
            ],
            [
                "uf" => "CE",
                "city" => "Guaraciaba do Norte"
            ],
            [
                "uf" => "CE",
                "city" => "Guaramiranga"
            ],
            [
                "uf" => "CE",
                "city" => "Hidrolândia"
            ],
            [
                "uf" => "CE",
                "city" => "Horizonte"
            ],
            [
                "uf" => "CE",
                "city" => "Ibaretama"
            ],
            [
                "uf" => "CE",
                "city" => "Ibiapina"
            ],
            [
                "uf" => "CE",
                "city" => "Ibicuitinga"
            ],
            [
                "uf" => "CE",
                "city" => "Icapuí"
            ],
            [
                "uf" => "CE",
                "city" => "Icó"
            ],
            [
                "uf" => "CE",
                "city" => "Iguatu"
            ],
            [
                "uf" => "CE",
                "city" => "Independência"
            ],
            [
                "uf" => "CE",
                "city" => "Ipaporanga"
            ],
            [
                "uf" => "CE",
                "city" => "Ipaumirim"
            ],
            [
                "uf" => "CE",
                "city" => "Ipu"
            ],
            [
                "uf" => "CE",
                "city" => "Ipueiras"
            ],
            [
                "uf" => "CE",
                "city" => "Iracema"
            ],
            [
                "uf" => "CE",
                "city" => "Irauçuba"
            ],
            [
                "uf" => "CE",
                "city" => "Itaiçaba"
            ],
            [
                "uf" => "CE",
                "city" => "Itaitinga"
            ],
            [
                "uf" => "CE",
                "city" => "Itapagé"
            ],
            [
                "uf" => "CE",
                "city" => "Itapipoca"
            ],
            [
                "uf" => "CE",
                "city" => "Itapiúna"
            ],
            [
                "uf" => "CE",
                "city" => "Itarema"
            ],
            [
                "uf" => "CE",
                "city" => "Itatira"
            ],
            [
                "uf" => "CE",
                "city" => "Jaguaretama"
            ],
            [
                "uf" => "CE",
                "city" => "Jaguaribara"
            ],
            [
                "uf" => "CE",
                "city" => "Jaguaribe"
            ],
            [
                "uf" => "CE",
                "city" => "Jaguaruana"
            ],
            [
                "uf" => "CE",
                "city" => "Jardim"
            ],
            [
                "uf" => "CE",
                "city" => "Jati"
            ],
            [
                "uf" => "CE",
                "city" => "Jijoca de Jericoacoara"
            ],
            [
                "uf" => "CE",
                "city" => "Juazeiro do Norte"
            ],
            [
                "uf" => "CE",
                "city" => "Jucás"
            ],
            [
                "uf" => "CE",
                "city" => "Lavras da Mangabeira"
            ],
            [
                "uf" => "CE",
                "city" => "Limoeiro do Norte"
            ],
            [
                "uf" => "CE",
                "city" => "Madalena"
            ],
            [
                "uf" => "CE",
                "city" => "Maracanaú"
            ],
            [
                "uf" => "CE",
                "city" => "Maranguape"
            ],
            [
                "uf" => "CE",
                "city" => "Marco"
            ],
            [
                "uf" => "CE",
                "city" => "Martinópole"
            ],
            [
                "uf" => "CE",
                "city" => "Massapê"
            ],
            [
                "uf" => "CE",
                "city" => "Mauriti"
            ],
            [
                "uf" => "CE",
                "city" => "Meruoca"
            ],
            [
                "uf" => "CE",
                "city" => "Milagres"
            ],
            [
                "uf" => "CE",
                "city" => "Milhã"
            ],
            [
                "uf" => "CE",
                "city" => "Miraíma"
            ],
            [
                "uf" => "CE",
                "city" => "Missão Velha"
            ],
            [
                "uf" => "CE",
                "city" => "Mombaça"
            ],
            [
                "uf" => "CE",
                "city" => "Monsenhor Tabosa"
            ],
            [
                "uf" => "CE",
                "city" => "Morada Nova"
            ],
            [
                "uf" => "CE",
                "city" => "Moraújo"
            ],
            [
                "uf" => "CE",
                "city" => "Morrinhos"
            ],
            [
                "uf" => "CE",
                "city" => "Mucambo"
            ],
            [
                "uf" => "CE",
                "city" => "Mulungu"
            ],
            [
                "uf" => "CE",
                "city" => "Nova Olinda"
            ],
            [
                "uf" => "CE",
                "city" => "Nova Russas"
            ],
            [
                "uf" => "CE",
                "city" => "Novo Oriente"
            ],
            [
                "uf" => "CE",
                "city" => "Ocara"
            ],
            [
                "uf" => "CE",
                "city" => "Orós"
            ],
            [
                "uf" => "CE",
                "city" => "Pacajus"
            ],
            [
                "uf" => "CE",
                "city" => "Pacatuba"
            ],
            [
                "uf" => "CE",
                "city" => "Pacoti"
            ],
            [
                "uf" => "CE",
                "city" => "Pacujá"
            ],
            [
                "uf" => "CE",
                "city" => "Palhano"
            ],
            [
                "uf" => "CE",
                "city" => "Palmácia"
            ],
            [
                "uf" => "CE",
                "city" => "Paracuru"
            ],
            [
                "uf" => "CE",
                "city" => "Paraipaba"
            ],
            [
                "uf" => "CE",
                "city" => "Parambu"
            ],
            [
                "uf" => "CE",
                "city" => "Paramoti"
            ],
            [
                "uf" => "CE",
                "city" => "Pedra Branca"
            ],
            [
                "uf" => "CE",
                "city" => "Penaforte"
            ],
            [
                "uf" => "CE",
                "city" => "Pentecoste"
            ],
            [
                "uf" => "CE",
                "city" => "Pereiro"
            ],
            [
                "uf" => "CE",
                "city" => "Pindoretama"
            ],
            [
                "uf" => "CE",
                "city" => "Piquet Carneiro"
            ],
            [
                "uf" => "CE",
                "city" => "Pires Ferreira"
            ],
            [
                "uf" => "CE",
                "city" => "Poranga"
            ],
            [
                "uf" => "CE",
                "city" => "Porteiras"
            ],
            [
                "uf" => "CE",
                "city" => "Potengi"
            ],
            [
                "uf" => "CE",
                "city" => "Potiretama"
            ],
            [
                "uf" => "CE",
                "city" => "Quiterianópolis"
            ],
            [
                "uf" => "CE",
                "city" => "Quixadá"
            ],
            [
                "uf" => "CE",
                "city" => "Quixelô"
            ],
            [
                "uf" => "CE",
                "city" => "Quixeramobim"
            ],
            [
                "uf" => "CE",
                "city" => "Quixeré"
            ],
            [
                "uf" => "CE",
                "city" => "Redenção"
            ],
            [
                "uf" => "CE",
                "city" => "Reriutaba"
            ],
            [
                "uf" => "CE",
                "city" => "Russas"
            ],
            [
                "uf" => "CE",
                "city" => "Saboeiro"
            ],
            [
                "uf" => "CE",
                "city" => "Salitre"
            ],
            [
                "uf" => "CE",
                "city" => "Santana do Acaraú"
            ],
            [
                "uf" => "CE",
                "city" => "Santana do Cariri"
            ],
            [
                "uf" => "CE",
                "city" => "Santa Quitéria"
            ],
            [
                "uf" => "CE",
                "city" => "São Benedito"
            ],
            [
                "uf" => "CE",
                "city" => "São Gonçalo do Amarante"
            ],
            [
                "uf" => "CE",
                "city" => "São João do Jaguaribe"
            ],
            [
                "uf" => "CE",
                "city" => "São Luís do Curu"
            ],
            [
                "uf" => "CE",
                "city" => "Senador Pompeu"
            ],
            [
                "uf" => "CE",
                "city" => "Senador sá"
            ],
            [
                "uf" => "CE",
                "city" => "Sobral"
            ],
            [
                "uf" => "CE",
                "city" => "Solonópole"
            ],
            [
                "uf" => "CE",
                "city" => "Tabuleiro do Norte"
            ],
            [
                "uf" => "CE",
                "city" => "Tamboril"
            ],
            [
                "uf" => "CE",
                "city" => "Tarrafas"
            ],
            [
                "uf" => "CE",
                "city" => "Tauá"
            ],
            [
                "uf" => "CE",
                "city" => "Tejuçuoca"
            ],
            [
                "uf" => "CE",
                "city" => "Tianguá"
            ],
            [
                "uf" => "CE",
                "city" => "Trairi"
            ],
            [
                "uf" => "CE",
                "city" => "Tururu"
            ],
            [
                "uf" => "CE",
                "city" => "Ubajara"
            ],
            [
                "uf" => "CE",
                "city" => "Umari"
            ],
            [
                "uf" => "CE",
                "city" => "Umirim"
            ],
            [
                "uf" => "CE",
                "city" => "Uruburetama"
            ],
            [
                "uf" => "CE",
                "city" => "Uruoca"
            ],
            [
                "uf" => "CE",
                "city" => "Varjota"
            ],
            [
                "uf" => "CE",
                "city" => "Várzea Alegre"
            ],
            [
                "uf" => "CE",
                "city" => "Viçosa do Ceará"
            ],
            [
                "uf" => "RN",
                "city" => "Acari"
            ],
            [
                "uf" => "RN",
                "city" => "Açu"
            ],
            [
                "uf" => "RN",
                "city" => "Afonso Bezerra"
            ],
            [
                "uf" => "RN",
                "city" => "Água Nova"
            ],
            [
                "uf" => "RN",
                "city" => "Alexandria"
            ],
            [
                "uf" => "RN",
                "city" => "Almino Afonso"
            ],
            [
                "uf" => "RN",
                "city" => "Alto do Rodrigues"
            ],
            [
                "uf" => "RN",
                "city" => "Angicos"
            ],
            [
                "uf" => "RN",
                "city" => "Antônio Martins"
            ],
            [
                "uf" => "RN",
                "city" => "Apodi"
            ],
            [
                "uf" => "RN",
                "city" => "Areia Branca"
            ],
            [
                "uf" => "RN",
                "city" => "Arês"
            ],
            [
                "uf" => "RN",
                "city" => "Augusto Severo"
            ],
            [
                "uf" => "RN",
                "city" => "Baía Formosa"
            ],
            [
                "uf" => "RN",
                "city" => "Baraúna"
            ],
            [
                "uf" => "RN",
                "city" => "Barcelona"
            ],
            [
                "uf" => "RN",
                "city" => "Bento Fernandes"
            ],
            [
                "uf" => "RN",
                "city" => "Bodó"
            ],
            [
                "uf" => "RN",
                "city" => "Bom Jesus"
            ],
            [
                "uf" => "RN",
                "city" => "Brejinho"
            ],
            [
                "uf" => "RN",
                "city" => "Caiçara do Norte"
            ],
            [
                "uf" => "RN",
                "city" => "Caiçara do Rio do Vento"
            ],
            [
                "uf" => "RN",
                "city" => "Caicó"
            ],
            [
                "uf" => "RN",
                "city" => "Campo Redondo"
            ],
            [
                "uf" => "RN",
                "city" => "Canguaretama"
            ],
            [
                "uf" => "RN",
                "city" => "Caraúbas"
            ],
            [
                "uf" => "RN",
                "city" => "Carnaúba Dos Dantas"
            ],
            [
                "uf" => "RN",
                "city" => "Carnaubais"
            ],
            [
                "uf" => "RN",
                "city" => "Ceará-mirim"
            ],
            [
                "uf" => "RN",
                "city" => "Cerro Corá"
            ],
            [
                "uf" => "RN",
                "city" => "Coronel Ezequiel"
            ],
            [
                "uf" => "RN",
                "city" => "Coronel João Pessoa"
            ],
            [
                "uf" => "RN",
                "city" => "Cruzeta"
            ],
            [
                "uf" => "RN",
                "city" => "Currais Novos"
            ],
            [
                "uf" => "RN",
                "city" => "Doutor Severiano"
            ],
            [
                "uf" => "RN",
                "city" => "Parnamirim"
            ],
            [
                "uf" => "RN",
                "city" => "Encanto"
            ],
            [
                "uf" => "RN",
                "city" => "Equador"
            ],
            [
                "uf" => "RN",
                "city" => "Espírito Santo"
            ],
            [
                "uf" => "RN",
                "city" => "Extremoz"
            ],
            [
                "uf" => "RN",
                "city" => "Felipe Guerra"
            ],
            [
                "uf" => "RN",
                "city" => "Fernando Pedroza"
            ],
            [
                "uf" => "RN",
                "city" => "Florânia"
            ],
            [
                "uf" => "RN",
                "city" => "Francisco Dantas"
            ],
            [
                "uf" => "RN",
                "city" => "Frutuoso Gomes"
            ],
            [
                "uf" => "RN",
                "city" => "Galinhos"
            ],
            [
                "uf" => "RN",
                "city" => "Goianinha"
            ],
            [
                "uf" => "RN",
                "city" => "Governador Dix-sept Rosado"
            ],
            [
                "uf" => "RN",
                "city" => "Grossos"
            ],
            [
                "uf" => "RN",
                "city" => "Guamaré"
            ],
            [
                "uf" => "RN",
                "city" => "Ielmo Marinho"
            ],
            [
                "uf" => "RN",
                "city" => "Ipanguaçu"
            ],
            [
                "uf" => "RN",
                "city" => "Ipueira"
            ],
            [
                "uf" => "RN",
                "city" => "Itajá"
            ],
            [
                "uf" => "RN",
                "city" => "Itaú"
            ],
            [
                "uf" => "RN",
                "city" => "Jaçanã"
            ],
            [
                "uf" => "RN",
                "city" => "Jandaíra"
            ],
            [
                "uf" => "RN",
                "city" => "Janduís"
            ],
            [
                "uf" => "RN",
                "city" => "Januário Cicco"
            ],
            [
                "uf" => "RN",
                "city" => "Japi"
            ],
            [
                "uf" => "RN",
                "city" => "Jardim de Angicos"
            ],
            [
                "uf" => "RN",
                "city" => "Jardim de Piranhas"
            ],
            [
                "uf" => "RN",
                "city" => "Jardim do Seridó"
            ],
            [
                "uf" => "RN",
                "city" => "João Câmara"
            ],
            [
                "uf" => "RN",
                "city" => "João Dias"
            ],
            [
                "uf" => "RN",
                "city" => "José da Penha"
            ],
            [
                "uf" => "RN",
                "city" => "Jucurutu"
            ],
            [
                "uf" => "RN",
                "city" => "Jundiá"
            ],
            [
                "uf" => "RN",
                "city" => "Lagoa D´anta"
            ],
            [
                "uf" => "RN",
                "city" => "Lagoa de Pedras"
            ],
            [
                "uf" => "RN",
                "city" => "Lagoa de Velhos"
            ],
            [
                "uf" => "RN",
                "city" => "Lagoa Nova"
            ],
            [
                "uf" => "RN",
                "city" => "Lagoa Salgada"
            ],
            [
                "uf" => "RN",
                "city" => "Lajes"
            ],
            [
                "uf" => "RN",
                "city" => "Lajes Pintadas"
            ],
            [
                "uf" => "RN",
                "city" => "Lucrécia"
            ],
            [
                "uf" => "RN",
                "city" => "Luís Gomes"
            ],
            [
                "uf" => "RN",
                "city" => "Macaíba"
            ],
            [
                "uf" => "RN",
                "city" => "Macau"
            ],
            [
                "uf" => "RN",
                "city" => "Major Sales"
            ],
            [
                "uf" => "RN",
                "city" => "Marcelino Vieira"
            ],
            [
                "uf" => "RN",
                "city" => "Martins"
            ],
            [
                "uf" => "RN",
                "city" => "Maxaranguape"
            ],
            [
                "uf" => "RN",
                "city" => "Messias Targino"
            ],
            [
                "uf" => "RN",
                "city" => "Montanhas"
            ],
            [
                "uf" => "RN",
                "city" => "Monte Alegre"
            ],
            [
                "uf" => "RN",
                "city" => "Monte Das Gameleiras"
            ],
            [
                "uf" => "RN",
                "city" => "Mossoró"
            ],
            [
                "uf" => "RN",
                "city" => "Natal"
            ],
            [
                "uf" => "RN",
                "city" => "Nísia Floresta"
            ],
            [
                "uf" => "RN",
                "city" => "Nova Cruz"
            ],
            [
                "uf" => "RN",
                "city" => "Olho-d´água do Borges"
            ],
            [
                "uf" => "RN",
                "city" => "Ouro Branco"
            ],
            [
                "uf" => "RN",
                "city" => "Paraná"
            ],
            [
                "uf" => "RN",
                "city" => "Paraú"
            ],
            [
                "uf" => "RN",
                "city" => "Parazinho"
            ],
            [
                "uf" => "RN",
                "city" => "Parelhas"
            ],
            [
                "uf" => "RN",
                "city" => "Rio do Fogo"
            ],
            [
                "uf" => "RN",
                "city" => "Passa e Fica"
            ],
            [
                "uf" => "RN",
                "city" => "Passagem"
            ],
            [
                "uf" => "RN",
                "city" => "Patu"
            ],
            [
                "uf" => "RN",
                "city" => "Santa Maria"
            ],
            [
                "uf" => "RN",
                "city" => "Pau Dos Ferros"
            ],
            [
                "uf" => "RN",
                "city" => "Pedra Grande"
            ],
            [
                "uf" => "RN",
                "city" => "Pedra Preta"
            ],
            [
                "uf" => "RN",
                "city" => "Pedro Avelino"
            ],
            [
                "uf" => "RN",
                "city" => "Pedro Velho"
            ],
            [
                "uf" => "RN",
                "city" => "Pendências"
            ],
            [
                "uf" => "RN",
                "city" => "Pilões"
            ],
            [
                "uf" => "RN",
                "city" => "Poço Branco"
            ],
            [
                "uf" => "RN",
                "city" => "Portalegre"
            ],
            [
                "uf" => "RN",
                "city" => "Porto do Mangue"
            ],
            [
                "uf" => "RN",
                "city" => "Presidente Juscelino"
            ],
            [
                "uf" => "RN",
                "city" => "Pureza"
            ],
            [
                "uf" => "RN",
                "city" => "Rafael Fernandes"
            ],
            [
                "uf" => "RN",
                "city" => "Rafael Godeiro"
            ],
            [
                "uf" => "RN",
                "city" => "Riacho da Cruz"
            ],
            [
                "uf" => "RN",
                "city" => "Riacho de Santana"
            ],
            [
                "uf" => "RN",
                "city" => "Riachuelo"
            ],
            [
                "uf" => "RN",
                "city" => "Rodolfo Fernandes"
            ],
            [
                "uf" => "RN",
                "city" => "Tibau"
            ],
            [
                "uf" => "RN",
                "city" => "Ruy Barbosa"
            ],
            [
                "uf" => "RN",
                "city" => "Santa Cruz"
            ],
            [
                "uf" => "RN",
                "city" => "Santana do Matos"
            ],
            [
                "uf" => "RN",
                "city" => "Santana do Seridó"
            ],
            [
                "uf" => "RN",
                "city" => "Santo Antônio"
            ],
            [
                "uf" => "RN",
                "city" => "São Bento do Norte"
            ],
            [
                "uf" => "RN",
                "city" => "São Bento do Trairí"
            ],
            [
                "uf" => "RN",
                "city" => "São Fernando"
            ],
            [
                "uf" => "RN",
                "city" => "São Francisco do Oeste"
            ],
            [
                "uf" => "RN",
                "city" => "São Gonçalo do Amarante"
            ],
            [
                "uf" => "RN",
                "city" => "São João do Sabugi"
            ],
            [
                "uf" => "RN",
                "city" => "São José de Mipibu"
            ],
            [
                "uf" => "RN",
                "city" => "São José do Campestre"
            ],
            [
                "uf" => "RN",
                "city" => "São José do Seridó"
            ],
            [
                "uf" => "RN",
                "city" => "São Miguel"
            ],
            [
                "uf" => "RN",
                "city" => "São Miguel do Gostoso"
            ],
            [
                "uf" => "RN",
                "city" => "São Paulo do Potengi"
            ],
            [
                "uf" => "RN",
                "city" => "São Pedro"
            ],
            [
                "uf" => "RN",
                "city" => "São Rafael"
            ],
            [
                "uf" => "RN",
                "city" => "São Tomé"
            ],
            [
                "uf" => "RN",
                "city" => "São Vicente"
            ],
            [
                "uf" => "RN",
                "city" => "Senador Elói de Souza"
            ],
            [
                "uf" => "RN",
                "city" => "Senador Georgino Avelino"
            ],
            [
                "uf" => "RN",
                "city" => "Serra de São Bento"
            ],
            [
                "uf" => "RN",
                "city" => "Serra do Mel"
            ],
            [
                "uf" => "RN",
                "city" => "Serra Negra do Norte"
            ],
            [
                "uf" => "RN",
                "city" => "Serrinha"
            ],
            [
                "uf" => "RN",
                "city" => "Serrinha Dos Pintos"
            ],
            [
                "uf" => "RN",
                "city" => "Severiano Melo"
            ],
            [
                "uf" => "RN",
                "city" => "Sítio Novo"
            ],
            [
                "uf" => "RN",
                "city" => "Taboleiro Grande"
            ],
            [
                "uf" => "RN",
                "city" => "Taipu"
            ],
            [
                "uf" => "RN",
                "city" => "Tangará"
            ],
            [
                "uf" => "RN",
                "city" => "Tenente Ananias"
            ],
            [
                "uf" => "RN",
                "city" => "Tenente Laurentino Cruz"
            ],
            [
                "uf" => "RN",
                "city" => "Tibau do Sul"
            ],
            [
                "uf" => "RN",
                "city" => "Timbaúba Dos Batistas"
            ],
            [
                "uf" => "RN",
                "city" => "Touros"
            ],
            [
                "uf" => "RN",
                "city" => "Triunfo Potiguar"
            ],
            [
                "uf" => "RN",
                "city" => "Umarizal"
            ],
            [
                "uf" => "RN",
                "city" => "Upanema"
            ],
            [
                "uf" => "RN",
                "city" => "Várzea"
            ],
            [
                "uf" => "RN",
                "city" => "Venha-ver"
            ],
            [
                "uf" => "RN",
                "city" => "Vera Cruz"
            ],
            [
                "uf" => "RN",
                "city" => "Viçosa"
            ],
            [
                "uf" => "RN",
                "city" => "Vila Flor"
            ],
            [
                "uf" => "PB",
                "city" => "Água Branca"
            ],
            [
                "uf" => "PB",
                "city" => "Aguiar"
            ],
            [
                "uf" => "PB",
                "city" => "Alagoa Grande"
            ],
            [
                "uf" => "PB",
                "city" => "Alagoa Nova"
            ],
            [
                "uf" => "PB",
                "city" => "Alagoinha"
            ],
            [
                "uf" => "PB",
                "city" => "Alcantil"
            ],
            [
                "uf" => "PB",
                "city" => "Algodão de Jandaíra"
            ],
            [
                "uf" => "PB",
                "city" => "Alhandra"
            ],
            [
                "uf" => "PB",
                "city" => "São João do Rio do Peixe"
            ],
            [
                "uf" => "PB",
                "city" => "Amparo"
            ],
            [
                "uf" => "PB",
                "city" => "Aparecida"
            ],
            [
                "uf" => "PB",
                "city" => "Araçagi"
            ],
            [
                "uf" => "PB",
                "city" => "Arara"
            ],
            [
                "uf" => "PB",
                "city" => "Araruna"
            ],
            [
                "uf" => "PB",
                "city" => "Areia"
            ],
            [
                "uf" => "PB",
                "city" => "Areia de Baraúnas"
            ],
            [
                "uf" => "PB",
                "city" => "Areial"
            ],
            [
                "uf" => "PB",
                "city" => "Aroeiras"
            ],
            [
                "uf" => "PB",
                "city" => "Assunção"
            ],
            [
                "uf" => "PB",
                "city" => "Baía da Traição"
            ],
            [
                "uf" => "PB",
                "city" => "Bananeiras"
            ],
            [
                "uf" => "PB",
                "city" => "Baraúna"
            ],
            [
                "uf" => "PB",
                "city" => "Barra de Santana"
            ],
            [
                "uf" => "PB",
                "city" => "Barra de Santa Rosa"
            ],
            [
                "uf" => "PB",
                "city" => "Barra de São Miguel"
            ],
            [
                "uf" => "PB",
                "city" => "Bayeux"
            ],
            [
                "uf" => "PB",
                "city" => "Belém"
            ],
            [
                "uf" => "PB",
                "city" => "Belém do Brejo do Cruz"
            ],
            [
                "uf" => "PB",
                "city" => "Bernardino Batista"
            ],
            [
                "uf" => "PB",
                "city" => "Boa Ventura"
            ],
            [
                "uf" => "PB",
                "city" => "Boa Vista"
            ],
            [
                "uf" => "PB",
                "city" => "Bom Jesus"
            ],
            [
                "uf" => "PB",
                "city" => "Bom Sucesso"
            ],
            [
                "uf" => "PB",
                "city" => "Bonito de Santa fé"
            ],
            [
                "uf" => "PB",
                "city" => "Boqueirão"
            ],
            [
                "uf" => "PB",
                "city" => "Igaracy"
            ],
            [
                "uf" => "PB",
                "city" => "Borborema"
            ],
            [
                "uf" => "PB",
                "city" => "Brejo do Cruz"
            ],
            [
                "uf" => "PB",
                "city" => "Brejo Dos Santos"
            ],
            [
                "uf" => "PB",
                "city" => "Caaporã"
            ],
            [
                "uf" => "PB",
                "city" => "Cabaceiras"
            ],
            [
                "uf" => "PB",
                "city" => "Cabedelo"
            ],
            [
                "uf" => "PB",
                "city" => "Cachoeira Dos Índios"
            ],
            [
                "uf" => "PB",
                "city" => "Cacimba de Areia"
            ],
            [
                "uf" => "PB",
                "city" => "Cacimba de Dentro"
            ],
            [
                "uf" => "PB",
                "city" => "Cacimbas"
            ],
            [
                "uf" => "PB",
                "city" => "Caiçara"
            ],
            [
                "uf" => "PB",
                "city" => "Cajazeiras"
            ],
            [
                "uf" => "PB",
                "city" => "Cajazeirinhas"
            ],
            [
                "uf" => "PB",
                "city" => "Caldas Brandão"
            ],
            [
                "uf" => "PB",
                "city" => "Camalaú"
            ],
            [
                "uf" => "PB",
                "city" => "Campina Grande"
            ],
            [
                "uf" => "PB",
                "city" => "Capim"
            ],
            [
                "uf" => "PB",
                "city" => "Caraúbas"
            ],
            [
                "uf" => "PB",
                "city" => "Carrapateira"
            ],
            [
                "uf" => "PB",
                "city" => "Casserengue"
            ],
            [
                "uf" => "PB",
                "city" => "Catingueira"
            ],
            [
                "uf" => "PB",
                "city" => "Catolé do Rocha"
            ],
            [
                "uf" => "PB",
                "city" => "Caturité"
            ],
            [
                "uf" => "PB",
                "city" => "Conceição"
            ],
            [
                "uf" => "PB",
                "city" => "Condado"
            ],
            [
                "uf" => "PB",
                "city" => "Conde"
            ],
            [
                "uf" => "PB",
                "city" => "Congo"
            ],
            [
                "uf" => "PB",
                "city" => "Coremas"
            ],
            [
                "uf" => "PB",
                "city" => "Coxixola"
            ],
            [
                "uf" => "PB",
                "city" => "Cruz do Espírito Santo"
            ],
            [
                "uf" => "PB",
                "city" => "Cubati"
            ],
            [
                "uf" => "PB",
                "city" => "Cuité"
            ],
            [
                "uf" => "PB",
                "city" => "Cuitegi"
            ],
            [
                "uf" => "PB",
                "city" => "Cuité de Mamanguape"
            ],
            [
                "uf" => "PB",
                "city" => "Curral de Cima"
            ],
            [
                "uf" => "PB",
                "city" => "Curral Velho"
            ],
            [
                "uf" => "PB",
                "city" => "Damião"
            ],
            [
                "uf" => "PB",
                "city" => "Desterro"
            ],
            [
                "uf" => "PB",
                "city" => "Vista Serrana"
            ],
            [
                "uf" => "PB",
                "city" => "Diamante"
            ],
            [
                "uf" => "PB",
                "city" => "Dona Inês"
            ],
            [
                "uf" => "PB",
                "city" => "Duas Estradas"
            ],
            [
                "uf" => "PB",
                "city" => "Emas"
            ],
            [
                "uf" => "PB",
                "city" => "Esperança"
            ],
            [
                "uf" => "PB",
                "city" => "Fagundes"
            ],
            [
                "uf" => "PB",
                "city" => "Frei Martinho"
            ],
            [
                "uf" => "PB",
                "city" => "Gado Bravo"
            ],
            [
                "uf" => "PB",
                "city" => "Guarabira"
            ],
            [
                "uf" => "PB",
                "city" => "Gurinhém"
            ],
            [
                "uf" => "PB",
                "city" => "Gurjão"
            ],
            [
                "uf" => "PB",
                "city" => "Ibiara"
            ],
            [
                "uf" => "PB",
                "city" => "Imaculada"
            ],
            [
                "uf" => "PB",
                "city" => "Ingá"
            ],
            [
                "uf" => "PB",
                "city" => "Itabaiana"
            ],
            [
                "uf" => "PB",
                "city" => "Itaporanga"
            ],
            [
                "uf" => "PB",
                "city" => "Itapororoca"
            ],
            [
                "uf" => "PB",
                "city" => "Itatuba"
            ],
            [
                "uf" => "PB",
                "city" => "Jacaraú"
            ],
            [
                "uf" => "PB",
                "city" => "Jericó"
            ],
            [
                "uf" => "PB",
                "city" => "João Pessoa"
            ],
            [
                "uf" => "PB",
                "city" => "Juarez Távora"
            ],
            [
                "uf" => "PB",
                "city" => "Juazeirinho"
            ],
            [
                "uf" => "PB",
                "city" => "Junco do Seridó"
            ],
            [
                "uf" => "PB",
                "city" => "Juripiranga"
            ],
            [
                "uf" => "PB",
                "city" => "Juru"
            ],
            [
                "uf" => "PB",
                "city" => "Lagoa"
            ],
            [
                "uf" => "PB",
                "city" => "Lagoa de Dentro"
            ],
            [
                "uf" => "PB",
                "city" => "Lagoa Seca"
            ],
            [
                "uf" => "PB",
                "city" => "Lastro"
            ],
            [
                "uf" => "PB",
                "city" => "Livramento"
            ],
            [
                "uf" => "PB",
                "city" => "Logradouro"
            ],
            [
                "uf" => "PB",
                "city" => "Lucena"
            ],
            [
                "uf" => "PB",
                "city" => "Mãe D´água"
            ],
            [
                "uf" => "PB",
                "city" => "Malta"
            ],
            [
                "uf" => "PB",
                "city" => "Mamanguape"
            ],
            [
                "uf" => "PB",
                "city" => "Manaíra"
            ],
            [
                "uf" => "PB",
                "city" => "Marcação"
            ],
            [
                "uf" => "PB",
                "city" => "Mari"
            ],
            [
                "uf" => "PB",
                "city" => "Marizópolis"
            ],
            [
                "uf" => "PB",
                "city" => "Massaranduba"
            ],
            [
                "uf" => "PB",
                "city" => "Mataraca"
            ],
            [
                "uf" => "PB",
                "city" => "Matinhas"
            ],
            [
                "uf" => "PB",
                "city" => "Mato Grosso"
            ],
            [
                "uf" => "PB",
                "city" => "Maturéia"
            ],
            [
                "uf" => "PB",
                "city" => "Mogeiro"
            ],
            [
                "uf" => "PB",
                "city" => "Montadas"
            ],
            [
                "uf" => "PB",
                "city" => "Monte Horebe"
            ],
            [
                "uf" => "PB",
                "city" => "Monteiro"
            ],
            [
                "uf" => "PB",
                "city" => "Mulungu"
            ],
            [
                "uf" => "PB",
                "city" => "Natuba"
            ],
            [
                "uf" => "PB",
                "city" => "Nazarezinho"
            ],
            [
                "uf" => "PB",
                "city" => "Nova Floresta"
            ],
            [
                "uf" => "PB",
                "city" => "Nova Olinda"
            ],
            [
                "uf" => "PB",
                "city" => "Nova Palmeira"
            ],
            [
                "uf" => "PB",
                "city" => "Olho D´água"
            ],
            [
                "uf" => "PB",
                "city" => "Olivedos"
            ],
            [
                "uf" => "PB",
                "city" => "Ouro Velho"
            ],
            [
                "uf" => "PB",
                "city" => "Parari"
            ],
            [
                "uf" => "PB",
                "city" => "Passagem"
            ],
            [
                "uf" => "PB",
                "city" => "Patos"
            ],
            [
                "uf" => "PB",
                "city" => "Paulista"
            ],
            [
                "uf" => "PB",
                "city" => "Pedra Branca"
            ],
            [
                "uf" => "PB",
                "city" => "Pedra Lavrada"
            ],
            [
                "uf" => "PB",
                "city" => "Pedras de Fogo"
            ],
            [
                "uf" => "PB",
                "city" => "Piancó"
            ],
            [
                "uf" => "PB",
                "city" => "Picuí"
            ],
            [
                "uf" => "PB",
                "city" => "Pilar"
            ],
            [
                "uf" => "PB",
                "city" => "Pilões"
            ],
            [
                "uf" => "PB",
                "city" => "Pilõezinhos"
            ],
            [
                "uf" => "PB",
                "city" => "Pirpirituba"
            ],
            [
                "uf" => "PB",
                "city" => "Pitimbu"
            ],
            [
                "uf" => "PB",
                "city" => "Pocinhos"
            ],
            [
                "uf" => "PB",
                "city" => "Poço Dantas"
            ],
            [
                "uf" => "PB",
                "city" => "Poço de José de Moura"
            ],
            [
                "uf" => "PB",
                "city" => "Pombal"
            ],
            [
                "uf" => "PB",
                "city" => "Prata"
            ],
            [
                "uf" => "PB",
                "city" => "Princesa Isabel"
            ],
            [
                "uf" => "PB",
                "city" => "Puxinanã"
            ],
            [
                "uf" => "PB",
                "city" => "Queimadas"
            ],
            [
                "uf" => "PB",
                "city" => "Quixabá"
            ],
            [
                "uf" => "PB",
                "city" => "Remígio"
            ],
            [
                "uf" => "PB",
                "city" => "Pedro Régis"
            ],
            [
                "uf" => "PB",
                "city" => "Riachão"
            ],
            [
                "uf" => "PB",
                "city" => "Riachão do Bacamarte"
            ],
            [
                "uf" => "PB",
                "city" => "Riachão do Poço"
            ],
            [
                "uf" => "PB",
                "city" => "Riacho de Santo Antônio"
            ],
            [
                "uf" => "PB",
                "city" => "Riacho Dos Cavalos"
            ],
            [
                "uf" => "PB",
                "city" => "Rio Tinto"
            ],
            [
                "uf" => "PB",
                "city" => "Salgadinho"
            ],
            [
                "uf" => "PB",
                "city" => "Salgado de São Félix"
            ],
            [
                "uf" => "PB",
                "city" => "Santa Cecília"
            ],
            [
                "uf" => "PB",
                "city" => "Santa Cruz"
            ],
            [
                "uf" => "PB",
                "city" => "Santa Helena"
            ],
            [
                "uf" => "PB",
                "city" => "Santa Inês"
            ],
            [
                "uf" => "PB",
                "city" => "Santa Luzia"
            ],
            [
                "uf" => "PB",
                "city" => "Santana de Mangueira"
            ],
            [
                "uf" => "PB",
                "city" => "Santana Dos Garrotes"
            ],
            [
                "uf" => "PB",
                "city" => "Santarém"
            ],
            [
                "uf" => "PB",
                "city" => "Santa Rita"
            ],
            [
                "uf" => "PB",
                "city" => "Santa Teresinha"
            ],
            [
                "uf" => "PB",
                "city" => "Santo André"
            ],
            [
                "uf" => "PB",
                "city" => "São Bento"
            ],
            [
                "uf" => "PB",
                "city" => "São Bentinho"
            ],
            [
                "uf" => "PB",
                "city" => "São Domingos do Cariri"
            ],
            [
                "uf" => "PB",
                "city" => "São Domingos de Pombal"
            ],
            [
                "uf" => "PB",
                "city" => "São Francisco"
            ],
            [
                "uf" => "PB",
                "city" => "São João do Cariri"
            ],
            [
                "uf" => "PB",
                "city" => "São João do Tigre"
            ],
            [
                "uf" => "PB",
                "city" => "São José da Lagoa Tapada"
            ],
            [
                "uf" => "PB",
                "city" => "São José de Caiana"
            ],
            [
                "uf" => "PB",
                "city" => "São José de Espinharas"
            ],
            [
                "uf" => "PB",
                "city" => "São José Dos Ramos"
            ],
            [
                "uf" => "PB",
                "city" => "São José de Piranhas"
            ],
            [
                "uf" => "PB",
                "city" => "São José de Princesa"
            ],
            [
                "uf" => "PB",
                "city" => "São José do Bonfim"
            ],
            [
                "uf" => "PB",
                "city" => "São José do Brejo do Cruz"
            ],
            [
                "uf" => "PB",
                "city" => "São José do Sabugi"
            ],
            [
                "uf" => "PB",
                "city" => "São José Dos Cordeiros"
            ],
            [
                "uf" => "PB",
                "city" => "São Mamede"
            ],
            [
                "uf" => "PB",
                "city" => "São Miguel de Taipu"
            ],
            [
                "uf" => "PB",
                "city" => "São Sebastião de Lagoa de Roça"
            ],
            [
                "uf" => "PB",
                "city" => "São Sebastião do Umbuzeiro"
            ],
            [
                "uf" => "PB",
                "city" => "Sapé"
            ],
            [
                "uf" => "PB",
                "city" => "Seridó"
            ],
            [
                "uf" => "PB",
                "city" => "Serra Branca"
            ],
            [
                "uf" => "PB",
                "city" => "Serra da Raiz"
            ],
            [
                "uf" => "PB",
                "city" => "Serra Grande"
            ],
            [
                "uf" => "PB",
                "city" => "Serra Redonda"
            ],
            [
                "uf" => "PB",
                "city" => "Serraria"
            ],
            [
                "uf" => "PB",
                "city" => "Sertãozinho"
            ],
            [
                "uf" => "PB",
                "city" => "Sobrado"
            ],
            [
                "uf" => "PB",
                "city" => "Solânea"
            ],
            [
                "uf" => "PB",
                "city" => "Soledade"
            ],
            [
                "uf" => "PB",
                "city" => "Sossêgo"
            ],
            [
                "uf" => "PB",
                "city" => "Sousa"
            ],
            [
                "uf" => "PB",
                "city" => "Sumé"
            ],
            [
                "uf" => "PB",
                "city" => "Campo de Santana"
            ],
            [
                "uf" => "PB",
                "city" => "Taperoá"
            ],
            [
                "uf" => "PB",
                "city" => "Tavares"
            ],
            [
                "uf" => "PB",
                "city" => "Teixeira"
            ],
            [
                "uf" => "PB",
                "city" => "Tenório"
            ],
            [
                "uf" => "PB",
                "city" => "Triunfo"
            ],
            [
                "uf" => "PB",
                "city" => "Uiraúna"
            ],
            [
                "uf" => "PB",
                "city" => "Umbuzeiro"
            ],
            [
                "uf" => "PB",
                "city" => "Várzea"
            ],
            [
                "uf" => "PB",
                "city" => "Vieirópolis"
            ],
            [
                "uf" => "PB",
                "city" => "Zabelê"
            ],
            [
                "uf" => "PE",
                "city" => "Abreu e Lima"
            ],
            [
                "uf" => "PE",
                "city" => "Afogados da Ingazeira"
            ],
            [
                "uf" => "PE",
                "city" => "Afrânio"
            ],
            [
                "uf" => "PE",
                "city" => "Agrestina"
            ],
            [
                "uf" => "PE",
                "city" => "Água Preta"
            ],
            [
                "uf" => "PE",
                "city" => "Águas Belas"
            ],
            [
                "uf" => "PE",
                "city" => "Alagoinha"
            ],
            [
                "uf" => "PE",
                "city" => "Aliança"
            ],
            [
                "uf" => "PE",
                "city" => "Altinho"
            ],
            [
                "uf" => "PE",
                "city" => "Amaraji"
            ],
            [
                "uf" => "PE",
                "city" => "Angelim"
            ],
            [
                "uf" => "PE",
                "city" => "Araçoiaba"
            ],
            [
                "uf" => "PE",
                "city" => "Araripina"
            ],
            [
                "uf" => "PE",
                "city" => "Arcoverde"
            ],
            [
                "uf" => "PE",
                "city" => "Barra de Guabiraba"
            ],
            [
                "uf" => "PE",
                "city" => "Barreiros"
            ],
            [
                "uf" => "PE",
                "city" => "Belém de Maria"
            ],
            [
                "uf" => "PE",
                "city" => "Belém de São Francisco"
            ],
            [
                "uf" => "PE",
                "city" => "Belo Jardim"
            ],
            [
                "uf" => "PE",
                "city" => "Betânia"
            ],
            [
                "uf" => "PE",
                "city" => "Bezerros"
            ],
            [
                "uf" => "PE",
                "city" => "Bodocó"
            ],
            [
                "uf" => "PE",
                "city" => "Bom Conselho"
            ],
            [
                "uf" => "PE",
                "city" => "Bom Jardim"
            ],
            [
                "uf" => "PE",
                "city" => "Bonito"
            ],
            [
                "uf" => "PE",
                "city" => "Brejão"
            ],
            [
                "uf" => "PE",
                "city" => "Brejinho"
            ],
            [
                "uf" => "PE",
                "city" => "Brejo da Madre de Deus"
            ],
            [
                "uf" => "PE",
                "city" => "Buenos Aires"
            ],
            [
                "uf" => "PE",
                "city" => "Buíque"
            ],
            [
                "uf" => "PE",
                "city" => "Cabo de Santo Agostinho"
            ],
            [
                "uf" => "PE",
                "city" => "Cabrobó"
            ],
            [
                "uf" => "PE",
                "city" => "Cachoeirinha"
            ],
            [
                "uf" => "PE",
                "city" => "Caetés"
            ],
            [
                "uf" => "PE",
                "city" => "Calçado"
            ],
            [
                "uf" => "PE",
                "city" => "Calumbi"
            ],
            [
                "uf" => "PE",
                "city" => "Camaragibe"
            ],
            [
                "uf" => "PE",
                "city" => "Camocim de São Félix"
            ],
            [
                "uf" => "PE",
                "city" => "Camutanga"
            ],
            [
                "uf" => "PE",
                "city" => "Canhotinho"
            ],
            [
                "uf" => "PE",
                "city" => "Capoeiras"
            ],
            [
                "uf" => "PE",
                "city" => "Carnaíba"
            ],
            [
                "uf" => "PE",
                "city" => "Carnaubeira da Penha"
            ],
            [
                "uf" => "PE",
                "city" => "Carpina"
            ],
            [
                "uf" => "PE",
                "city" => "Caruaru"
            ],
            [
                "uf" => "PE",
                "city" => "Casinhas"
            ],
            [
                "uf" => "PE",
                "city" => "Catende"
            ],
            [
                "uf" => "PE",
                "city" => "Cedro"
            ],
            [
                "uf" => "PE",
                "city" => "Chã de Alegria"
            ],
            [
                "uf" => "PE",
                "city" => "Chã Grande"
            ],
            [
                "uf" => "PE",
                "city" => "Condado"
            ],
            [
                "uf" => "PE",
                "city" => "Correntes"
            ],
            [
                "uf" => "PE",
                "city" => "Cortês"
            ],
            [
                "uf" => "PE",
                "city" => "Cumaru"
            ],
            [
                "uf" => "PE",
                "city" => "Cupira"
            ],
            [
                "uf" => "PE",
                "city" => "Custódia"
            ],
            [
                "uf" => "PE",
                "city" => "Dormentes"
            ],
            [
                "uf" => "PE",
                "city" => "Escada"
            ],
            [
                "uf" => "PE",
                "city" => "Exu"
            ],
            [
                "uf" => "PE",
                "city" => "Feira Nova"
            ],
            [
                "uf" => "PE",
                "city" => "Fernando de Noronha"
            ],
            [
                "uf" => "PE",
                "city" => "Ferreiros"
            ],
            [
                "uf" => "PE",
                "city" => "Flores"
            ],
            [
                "uf" => "PE",
                "city" => "Floresta"
            ],
            [
                "uf" => "PE",
                "city" => "Frei Miguelinho"
            ],
            [
                "uf" => "PE",
                "city" => "Gameleira"
            ],
            [
                "uf" => "PE",
                "city" => "Garanhuns"
            ],
            [
                "uf" => "PE",
                "city" => "Glória do Goitá"
            ],
            [
                "uf" => "PE",
                "city" => "Goiana"
            ],
            [
                "uf" => "PE",
                "city" => "Granito"
            ],
            [
                "uf" => "PE",
                "city" => "Gravatá"
            ],
            [
                "uf" => "PE",
                "city" => "Iati"
            ],
            [
                "uf" => "PE",
                "city" => "Ibimirim"
            ],
            [
                "uf" => "PE",
                "city" => "Ibirajuba"
            ],
            [
                "uf" => "PE",
                "city" => "Igarassu"
            ],
            [
                "uf" => "PE",
                "city" => "Iguaraci"
            ],
            [
                "uf" => "PE",
                "city" => "Inajá"
            ],
            [
                "uf" => "PE",
                "city" => "Ingazeira"
            ],
            [
                "uf" => "PE",
                "city" => "Ipojuca"
            ],
            [
                "uf" => "PE",
                "city" => "Ipubi"
            ],
            [
                "uf" => "PE",
                "city" => "Itacuruba"
            ],
            [
                "uf" => "PE",
                "city" => "Itaíba"
            ],
            [
                "uf" => "PE",
                "city" => "Ilha de Itamaracá"
            ],
            [
                "uf" => "PE",
                "city" => "Itambé"
            ],
            [
                "uf" => "PE",
                "city" => "Itapetim"
            ],
            [
                "uf" => "PE",
                "city" => "Itapissuma"
            ],
            [
                "uf" => "PE",
                "city" => "Itaquitinga"
            ],
            [
                "uf" => "PE",
                "city" => "Jaboatão Dos Guararapes"
            ],
            [
                "uf" => "PE",
                "city" => "Jaqueira"
            ],
            [
                "uf" => "PE",
                "city" => "Jataúba"
            ],
            [
                "uf" => "PE",
                "city" => "Jatobá"
            ],
            [
                "uf" => "PE",
                "city" => "João Alfredo"
            ],
            [
                "uf" => "PE",
                "city" => "Joaquim Nabuco"
            ],
            [
                "uf" => "PE",
                "city" => "Jucati"
            ],
            [
                "uf" => "PE",
                "city" => "Jupi"
            ],
            [
                "uf" => "PE",
                "city" => "Jurema"
            ],
            [
                "uf" => "PE",
                "city" => "Lagoa do Carro"
            ],
            [
                "uf" => "PE",
                "city" => "Lagoa do Itaenga"
            ],
            [
                "uf" => "PE",
                "city" => "Lagoa do Ouro"
            ],
            [
                "uf" => "PE",
                "city" => "Lagoa Dos Gatos"
            ],
            [
                "uf" => "PE",
                "city" => "Lagoa Grande"
            ],
            [
                "uf" => "PE",
                "city" => "Lajedo"
            ],
            [
                "uf" => "PE",
                "city" => "Limoeiro"
            ],
            [
                "uf" => "PE",
                "city" => "Macaparana"
            ],
            [
                "uf" => "PE",
                "city" => "Machados"
            ],
            [
                "uf" => "PE",
                "city" => "Manari"
            ],
            [
                "uf" => "PE",
                "city" => "Maraial"
            ],
            [
                "uf" => "PE",
                "city" => "Mirandiba"
            ],
            [
                "uf" => "PE",
                "city" => "Moreno"
            ],
            [
                "uf" => "PE",
                "city" => "Nazaré da Mata"
            ],
            [
                "uf" => "PE",
                "city" => "Olinda"
            ],
            [
                "uf" => "PE",
                "city" => "Orobó"
            ],
            [
                "uf" => "PE",
                "city" => "Orocó"
            ],
            [
                "uf" => "PE",
                "city" => "Ouricuri"
            ],
            [
                "uf" => "PE",
                "city" => "Palmares"
            ],
            [
                "uf" => "PE",
                "city" => "Palmeirina"
            ],
            [
                "uf" => "PE",
                "city" => "Panelas"
            ],
            [
                "uf" => "PE",
                "city" => "Paranatama"
            ],
            [
                "uf" => "PE",
                "city" => "Parnamirim"
            ],
            [
                "uf" => "PE",
                "city" => "Passira"
            ],
            [
                "uf" => "PE",
                "city" => "Paudalho"
            ],
            [
                "uf" => "PE",
                "city" => "Paulista"
            ],
            [
                "uf" => "PE",
                "city" => "Pedra"
            ],
            [
                "uf" => "PE",
                "city" => "Pesqueira"
            ],
            [
                "uf" => "PE",
                "city" => "Petrolândia"
            ],
            [
                "uf" => "PE",
                "city" => "Petrolina"
            ],
            [
                "uf" => "PE",
                "city" => "Poção"
            ],
            [
                "uf" => "PE",
                "city" => "Pombos"
            ],
            [
                "uf" => "PE",
                "city" => "Primavera"
            ],
            [
                "uf" => "PE",
                "city" => "Quipapá"
            ],
            [
                "uf" => "PE",
                "city" => "Quixaba"
            ],
            [
                "uf" => "PE",
                "city" => "Recife"
            ],
            [
                "uf" => "PE",
                "city" => "Riacho Das Almas"
            ],
            [
                "uf" => "PE",
                "city" => "Ribeirão"
            ],
            [
                "uf" => "PE",
                "city" => "Rio Formoso"
            ],
            [
                "uf" => "PE",
                "city" => "Sairé"
            ],
            [
                "uf" => "PE",
                "city" => "Salgadinho"
            ],
            [
                "uf" => "PE",
                "city" => "Salgueiro"
            ],
            [
                "uf" => "PE",
                "city" => "Saloá"
            ],
            [
                "uf" => "PE",
                "city" => "Sanharó"
            ],
            [
                "uf" => "PE",
                "city" => "Santa Cruz"
            ],
            [
                "uf" => "PE",
                "city" => "Santa Cruz da Baixa Verde"
            ],
            [
                "uf" => "PE",
                "city" => "Santa Cruz do Capibaribe"
            ],
            [
                "uf" => "PE",
                "city" => "Santa Filomena"
            ],
            [
                "uf" => "PE",
                "city" => "Santa Maria da Boa Vista"
            ],
            [
                "uf" => "PE",
                "city" => "Santa Maria do Cambucá"
            ],
            [
                "uf" => "PE",
                "city" => "Santa Terezinha"
            ],
            [
                "uf" => "PE",
                "city" => "São Benedito do Sul"
            ],
            [
                "uf" => "PE",
                "city" => "São Bento do Una"
            ],
            [
                "uf" => "PE",
                "city" => "São Caitano"
            ],
            [
                "uf" => "PE",
                "city" => "São João"
            ],
            [
                "uf" => "PE",
                "city" => "São Joaquim do Monte"
            ],
            [
                "uf" => "PE",
                "city" => "São José da Coroa Grande"
            ],
            [
                "uf" => "PE",
                "city" => "São José do Belmonte"
            ],
            [
                "uf" => "PE",
                "city" => "São José do Egito"
            ],
            [
                "uf" => "PE",
                "city" => "São Lourenço da Mata"
            ],
            [
                "uf" => "PE",
                "city" => "São Vicente Ferrer"
            ],
            [
                "uf" => "PE",
                "city" => "Serra Talhada"
            ],
            [
                "uf" => "PE",
                "city" => "Serrita"
            ],
            [
                "uf" => "PE",
                "city" => "Sertânia"
            ],
            [
                "uf" => "PE",
                "city" => "Sirinhaém"
            ],
            [
                "uf" => "PE",
                "city" => "Moreilândia"
            ],
            [
                "uf" => "PE",
                "city" => "Solidão"
            ],
            [
                "uf" => "PE",
                "city" => "Surubim"
            ],
            [
                "uf" => "PE",
                "city" => "Tabira"
            ],
            [
                "uf" => "PE",
                "city" => "Tacaimbó"
            ],
            [
                "uf" => "PE",
                "city" => "Tacaratu"
            ],
            [
                "uf" => "PE",
                "city" => "Tamandaré"
            ],
            [
                "uf" => "PE",
                "city" => "Taquaritinga do Norte"
            ],
            [
                "uf" => "PE",
                "city" => "Terezinha"
            ],
            [
                "uf" => "PE",
                "city" => "Terra Nova"
            ],
            [
                "uf" => "PE",
                "city" => "Timbaúba"
            ],
            [
                "uf" => "PE",
                "city" => "Toritama"
            ],
            [
                "uf" => "PE",
                "city" => "Tracunhaém"
            ],
            [
                "uf" => "PE",
                "city" => "Trindade"
            ],
            [
                "uf" => "PE",
                "city" => "Triunfo"
            ],
            [
                "uf" => "PE",
                "city" => "Tupanatinga"
            ],
            [
                "uf" => "PE",
                "city" => "Tuparetama"
            ],
            [
                "uf" => "PE",
                "city" => "Venturosa"
            ],
            [
                "uf" => "PE",
                "city" => "Verdejante"
            ],
            [
                "uf" => "PE",
                "city" => "Vertente do Lério"
            ],
            [
                "uf" => "PE",
                "city" => "Vertentes"
            ],
            [
                "uf" => "PE",
                "city" => "Vicência"
            ],
            [
                "uf" => "PE",
                "city" => "Vitória de Santo Antão"
            ],
            [
                "uf" => "PE",
                "city" => "Xexéu"
            ],
            [
                "uf" => "AL",
                "city" => "Água Branca"
            ],
            [
                "uf" => "AL",
                "city" => "Anadia"
            ],
            [
                "uf" => "AL",
                "city" => "Arapiraca"
            ],
            [
                "uf" => "AL",
                "city" => "Atalaia"
            ],
            [
                "uf" => "AL",
                "city" => "Barra de Santo Antônio"
            ],
            [
                "uf" => "AL",
                "city" => "Barra de São Miguel"
            ],
            [
                "uf" => "AL",
                "city" => "Batalha"
            ],
            [
                "uf" => "AL",
                "city" => "Belém"
            ],
            [
                "uf" => "AL",
                "city" => "Belo Monte"
            ],
            [
                "uf" => "AL",
                "city" => "Boca da Mata"
            ],
            [
                "uf" => "AL",
                "city" => "Branquinha"
            ],
            [
                "uf" => "AL",
                "city" => "Cacimbinhas"
            ],
            [
                "uf" => "AL",
                "city" => "Cajueiro"
            ],
            [
                "uf" => "AL",
                "city" => "Campestre"
            ],
            [
                "uf" => "AL",
                "city" => "Campo Alegre"
            ],
            [
                "uf" => "AL",
                "city" => "Campo Grande"
            ],
            [
                "uf" => "AL",
                "city" => "Canapi"
            ],
            [
                "uf" => "AL",
                "city" => "Capela"
            ],
            [
                "uf" => "AL",
                "city" => "Carneiros"
            ],
            [
                "uf" => "AL",
                "city" => "Chã Preta"
            ],
            [
                "uf" => "AL",
                "city" => "Coité do Nóia"
            ],
            [
                "uf" => "AL",
                "city" => "Colônia Leopoldina"
            ],
            [
                "uf" => "AL",
                "city" => "Coqueiro Seco"
            ],
            [
                "uf" => "AL",
                "city" => "Coruripe"
            ],
            [
                "uf" => "AL",
                "city" => "Craíbas"
            ],
            [
                "uf" => "AL",
                "city" => "Delmiro Gouveia"
            ],
            [
                "uf" => "AL",
                "city" => "Dois Riachos"
            ],
            [
                "uf" => "AL",
                "city" => "Estrela de Alagoas"
            ],
            [
                "uf" => "AL",
                "city" => "Feira Grande"
            ],
            [
                "uf" => "AL",
                "city" => "Feliz Deserto"
            ],
            [
                "uf" => "AL",
                "city" => "Flexeiras"
            ],
            [
                "uf" => "AL",
                "city" => "Girau do Ponciano"
            ],
            [
                "uf" => "AL",
                "city" => "Ibateguara"
            ],
            [
                "uf" => "AL",
                "city" => "Igaci"
            ],
            [
                "uf" => "AL",
                "city" => "Igreja Nova"
            ],
            [
                "uf" => "AL",
                "city" => "Inhapi"
            ],
            [
                "uf" => "AL",
                "city" => "Jacaré Dos Homens"
            ],
            [
                "uf" => "AL",
                "city" => "Jacuípe"
            ],
            [
                "uf" => "AL",
                "city" => "Japaratinga"
            ],
            [
                "uf" => "AL",
                "city" => "Jaramataia"
            ],
            [
                "uf" => "AL",
                "city" => "Jequiá da Praia"
            ],
            [
                "uf" => "AL",
                "city" => "Joaquim Gomes"
            ],
            [
                "uf" => "AL",
                "city" => "Jundiá"
            ],
            [
                "uf" => "AL",
                "city" => "Junqueiro"
            ],
            [
                "uf" => "AL",
                "city" => "Lagoa da Canoa"
            ],
            [
                "uf" => "AL",
                "city" => "Limoeiro de Anadia"
            ],
            [
                "uf" => "AL",
                "city" => "Maceió"
            ],
            [
                "uf" => "AL",
                "city" => "Major Isidoro"
            ],
            [
                "uf" => "AL",
                "city" => "Maragogi"
            ],
            [
                "uf" => "AL",
                "city" => "Maravilha"
            ],
            [
                "uf" => "AL",
                "city" => "Marechal Deodoro"
            ],
            [
                "uf" => "AL",
                "city" => "Maribondo"
            ],
            [
                "uf" => "AL",
                "city" => "Mar Vermelho"
            ],
            [
                "uf" => "AL",
                "city" => "Mata Grande"
            ],
            [
                "uf" => "AL",
                "city" => "Matriz de Camaragibe"
            ],
            [
                "uf" => "AL",
                "city" => "Messias"
            ],
            [
                "uf" => "AL",
                "city" => "Minador do Negrão"
            ],
            [
                "uf" => "AL",
                "city" => "Monteirópolis"
            ],
            [
                "uf" => "AL",
                "city" => "Murici"
            ],
            [
                "uf" => "AL",
                "city" => "Novo Lino"
            ],
            [
                "uf" => "AL",
                "city" => "Olho D´água Das Flores"
            ],
            [
                "uf" => "AL",
                "city" => "Olho D´água do Casado"
            ],
            [
                "uf" => "AL",
                "city" => "Olho D´água Grande"
            ],
            [
                "uf" => "AL",
                "city" => "Olivença"
            ],
            [
                "uf" => "AL",
                "city" => "Ouro Branco"
            ],
            [
                "uf" => "AL",
                "city" => "Palestina"
            ],
            [
                "uf" => "AL",
                "city" => "Palmeira Dos Índios"
            ],
            [
                "uf" => "AL",
                "city" => "Pão de Açúcar"
            ],
            [
                "uf" => "AL",
                "city" => "Pariconha"
            ],
            [
                "uf" => "AL",
                "city" => "Paripueira"
            ],
            [
                "uf" => "AL",
                "city" => "Passo de Camaragibe"
            ],
            [
                "uf" => "AL",
                "city" => "Paulo Jacinto"
            ],
            [
                "uf" => "AL",
                "city" => "Penedo"
            ],
            [
                "uf" => "AL",
                "city" => "Piaçabuçu"
            ],
            [
                "uf" => "AL",
                "city" => "Pilar"
            ],
            [
                "uf" => "AL",
                "city" => "Pindoba"
            ],
            [
                "uf" => "AL",
                "city" => "Piranhas"
            ],
            [
                "uf" => "AL",
                "city" => "Poço Das Trincheiras"
            ],
            [
                "uf" => "AL",
                "city" => "Porto Calvo"
            ],
            [
                "uf" => "AL",
                "city" => "Porto de Pedras"
            ],
            [
                "uf" => "AL",
                "city" => "Porto Real do Colégio"
            ],
            [
                "uf" => "AL",
                "city" => "Quebrangulo"
            ],
            [
                "uf" => "AL",
                "city" => "Rio Largo"
            ],
            [
                "uf" => "AL",
                "city" => "Roteiro"
            ],
            [
                "uf" => "AL",
                "city" => "Santa Luzia do Norte"
            ],
            [
                "uf" => "AL",
                "city" => "Santana do Ipanema"
            ],
            [
                "uf" => "AL",
                "city" => "Santana do Mundaú"
            ],
            [
                "uf" => "AL",
                "city" => "São Brás"
            ],
            [
                "uf" => "AL",
                "city" => "São José da Laje"
            ],
            [
                "uf" => "AL",
                "city" => "São José da Tapera"
            ],
            [
                "uf" => "AL",
                "city" => "São Luís do Quitunde"
            ],
            [
                "uf" => "AL",
                "city" => "São Miguel Dos Campos"
            ],
            [
                "uf" => "AL",
                "city" => "São Miguel Dos Milagres"
            ],
            [
                "uf" => "AL",
                "city" => "São Sebastião"
            ],
            [
                "uf" => "AL",
                "city" => "Satuba"
            ],
            [
                "uf" => "AL",
                "city" => "Senador Rui Palmeira"
            ],
            [
                "uf" => "AL",
                "city" => "Tanque D´arca"
            ],
            [
                "uf" => "AL",
                "city" => "Taquarana"
            ],
            [
                "uf" => "AL",
                "city" => "Teotônio Vilela"
            ],
            [
                "uf" => "AL",
                "city" => "Traipu"
            ],
            [
                "uf" => "AL",
                "city" => "União Dos Palmares"
            ],
            [
                "uf" => "AL",
                "city" => "Viçosa"
            ],
            [
                "uf" => "SE",
                "city" => "Amparo de São Francisco"
            ],
            [
                "uf" => "SE",
                "city" => "Aquidabã"
            ],
            [
                "uf" => "SE",
                "city" => "Aracaju"
            ],
            [
                "uf" => "SE",
                "city" => "Arauá"
            ],
            [
                "uf" => "SE",
                "city" => "Areia Branca"
            ],
            [
                "uf" => "SE",
                "city" => "Barra Dos Coqueiros"
            ],
            [
                "uf" => "SE",
                "city" => "Boquim"
            ],
            [
                "uf" => "SE",
                "city" => "Brejo Grande"
            ],
            [
                "uf" => "SE",
                "city" => "Campo do Brito"
            ],
            [
                "uf" => "SE",
                "city" => "Canhoba"
            ],
            [
                "uf" => "SE",
                "city" => "Canindé de São Francisco"
            ],
            [
                "uf" => "SE",
                "city" => "Capela"
            ],
            [
                "uf" => "SE",
                "city" => "Carira"
            ],
            [
                "uf" => "SE",
                "city" => "Carmópolis"
            ],
            [
                "uf" => "SE",
                "city" => "Cedro de São João"
            ],
            [
                "uf" => "SE",
                "city" => "Cristinápolis"
            ],
            [
                "uf" => "SE",
                "city" => "Cumbe"
            ],
            [
                "uf" => "SE",
                "city" => "Divina Pastora"
            ],
            [
                "uf" => "SE",
                "city" => "Estância"
            ],
            [
                "uf" => "SE",
                "city" => "Feira Nova"
            ],
            [
                "uf" => "SE",
                "city" => "Frei Paulo"
            ],
            [
                "uf" => "SE",
                "city" => "Gararu"
            ],
            [
                "uf" => "SE",
                "city" => "General Maynard"
            ],
            [
                "uf" => "SE",
                "city" => "Gracho Cardoso"
            ],
            [
                "uf" => "SE",
                "city" => "Ilha Das Flores"
            ],
            [
                "uf" => "SE",
                "city" => "Indiaroba"
            ],
            [
                "uf" => "SE",
                "city" => "Itabaiana"
            ],
            [
                "uf" => "SE",
                "city" => "Itabaianinha"
            ],
            [
                "uf" => "SE",
                "city" => "Itabi"
            ],
            [
                "uf" => "SE",
                "city" => "Itaporanga D´ajuda"
            ],
            [
                "uf" => "SE",
                "city" => "Japaratuba"
            ],
            [
                "uf" => "SE",
                "city" => "Japoatã"
            ],
            [
                "uf" => "SE",
                "city" => "Lagarto"
            ],
            [
                "uf" => "SE",
                "city" => "Laranjeiras"
            ],
            [
                "uf" => "SE",
                "city" => "Macambira"
            ],
            [
                "uf" => "SE",
                "city" => "Malhada Dos Bois"
            ],
            [
                "uf" => "SE",
                "city" => "Malhador"
            ],
            [
                "uf" => "SE",
                "city" => "Maruim"
            ],
            [
                "uf" => "SE",
                "city" => "Moita Bonita"
            ],
            [
                "uf" => "SE",
                "city" => "Monte Alegre de Sergipe"
            ],
            [
                "uf" => "SE",
                "city" => "Muribeca"
            ],
            [
                "uf" => "SE",
                "city" => "Neópolis"
            ],
            [
                "uf" => "SE",
                "city" => "Nossa Senhora Aparecida"
            ],
            [
                "uf" => "SE",
                "city" => "Nossa Senhora da Glória"
            ],
            [
                "uf" => "SE",
                "city" => "Nossa Senhora Das Dores"
            ],
            [
                "uf" => "SE",
                "city" => "Nossa Senhora de Lourdes"
            ],
            [
                "uf" => "SE",
                "city" => "Nossa Senhora do Socorro"
            ],
            [
                "uf" => "SE",
                "city" => "Pacatuba"
            ],
            [
                "uf" => "SE",
                "city" => "Pedra Mole"
            ],
            [
                "uf" => "SE",
                "city" => "Pedrinhas"
            ],
            [
                "uf" => "SE",
                "city" => "Pinhão"
            ],
            [
                "uf" => "SE",
                "city" => "Pirambu"
            ],
            [
                "uf" => "SE",
                "city" => "Poço Redondo"
            ],
            [
                "uf" => "SE",
                "city" => "Poço Verde"
            ],
            [
                "uf" => "SE",
                "city" => "Porto da Folha"
            ],
            [
                "uf" => "SE",
                "city" => "Propriá"
            ],
            [
                "uf" => "SE",
                "city" => "Riachão do Dantas"
            ],
            [
                "uf" => "SE",
                "city" => "Riachuelo"
            ],
            [
                "uf" => "SE",
                "city" => "Ribeirópolis"
            ],
            [
                "uf" => "SE",
                "city" => "Rosário do Catete"
            ],
            [
                "uf" => "SE",
                "city" => "Salgado"
            ],
            [
                "uf" => "SE",
                "city" => "Santa Luzia do Itanhy"
            ],
            [
                "uf" => "SE",
                "city" => "Santana do São Francisco"
            ],
            [
                "uf" => "SE",
                "city" => "Santa Rosa de Lima"
            ],
            [
                "uf" => "SE",
                "city" => "Santo Amaro Das Brotas"
            ],
            [
                "uf" => "SE",
                "city" => "São Cristóvão"
            ],
            [
                "uf" => "SE",
                "city" => "São Domingos"
            ],
            [
                "uf" => "SE",
                "city" => "São Francisco"
            ],
            [
                "uf" => "SE",
                "city" => "São Miguel do Aleixo"
            ],
            [
                "uf" => "SE",
                "city" => "Simão Dias"
            ],
            [
                "uf" => "SE",
                "city" => "Siriri"
            ],
            [
                "uf" => "SE",
                "city" => "Telha"
            ],
            [
                "uf" => "SE",
                "city" => "Tobias Barreto"
            ],
            [
                "uf" => "SE",
                "city" => "Tomar do Geru"
            ],
            [
                "uf" => "SE",
                "city" => "Umbaúba"
            ],
            [
                "uf" => "BA",
                "city" => "Abaíra"
            ],
            [
                "uf" => "BA",
                "city" => "Abaré"
            ],
            [
                "uf" => "BA",
                "city" => "Acajutiba"
            ],
            [
                "uf" => "BA",
                "city" => "Adustina"
            ],
            [
                "uf" => "BA",
                "city" => "Água Fria"
            ],
            [
                "uf" => "BA",
                "city" => "Érico Cardoso"
            ],
            [
                "uf" => "BA",
                "city" => "Aiquara"
            ],
            [
                "uf" => "BA",
                "city" => "Alagoinhas"
            ],
            [
                "uf" => "BA",
                "city" => "Alcobaça"
            ],
            [
                "uf" => "BA",
                "city" => "Almadina"
            ],
            [
                "uf" => "BA",
                "city" => "Amargosa"
            ],
            [
                "uf" => "BA",
                "city" => "Amélia Rodrigues"
            ],
            [
                "uf" => "BA",
                "city" => "América Dourada"
            ],
            [
                "uf" => "BA",
                "city" => "Anagé"
            ],
            [
                "uf" => "BA",
                "city" => "Andaraí"
            ],
            [
                "uf" => "BA",
                "city" => "Andorinha"
            ],
            [
                "uf" => "BA",
                "city" => "Angical"
            ],
            [
                "uf" => "BA",
                "city" => "Anguera"
            ],
            [
                "uf" => "BA",
                "city" => "Antas"
            ],
            [
                "uf" => "BA",
                "city" => "Antônio Cardoso"
            ],
            [
                "uf" => "BA",
                "city" => "Antônio Gonçalves"
            ],
            [
                "uf" => "BA",
                "city" => "Aporá"
            ],
            [
                "uf" => "BA",
                "city" => "Apuarema"
            ],
            [
                "uf" => "BA",
                "city" => "Aracatu"
            ],
            [
                "uf" => "BA",
                "city" => "Araças"
            ],
            [
                "uf" => "BA",
                "city" => "Araci"
            ],
            [
                "uf" => "BA",
                "city" => "Aramari"
            ],
            [
                "uf" => "BA",
                "city" => "Arataca"
            ],
            [
                "uf" => "BA",
                "city" => "Aratuípe"
            ],
            [
                "uf" => "BA",
                "city" => "Aurelino Leal"
            ],
            [
                "uf" => "BA",
                "city" => "Baianópolis"
            ],
            [
                "uf" => "BA",
                "city" => "Baixa Grande"
            ],
            [
                "uf" => "BA",
                "city" => "Banzaê"
            ],
            [
                "uf" => "BA",
                "city" => "Barra"
            ],
            [
                "uf" => "BA",
                "city" => "Barra da Estiva"
            ],
            [
                "uf" => "BA",
                "city" => "Barra do Choça"
            ],
            [
                "uf" => "BA",
                "city" => "Barra do Mendes"
            ],
            [
                "uf" => "BA",
                "city" => "Barra do Rocha"
            ],
            [
                "uf" => "BA",
                "city" => "Barreiras"
            ],
            [
                "uf" => "BA",
                "city" => "Barro Alto"
            ],
            [
                "uf" => "BA",
                "city" => "Barrocas"
            ],
            [
                "uf" => "BA",
                "city" => "Governador Lomanto Júnior"
            ],
            [
                "uf" => "BA",
                "city" => "Belmonte"
            ],
            [
                "uf" => "BA",
                "city" => "Belo Campo"
            ],
            [
                "uf" => "BA",
                "city" => "Biritinga"
            ],
            [
                "uf" => "BA",
                "city" => "Boa Nova"
            ],
            [
                "uf" => "BA",
                "city" => "Boa Vista do Tupim"
            ],
            [
                "uf" => "BA",
                "city" => "Bom Jesus da Lapa"
            ],
            [
                "uf" => "BA",
                "city" => "Bom Jesus da Serra"
            ],
            [
                "uf" => "BA",
                "city" => "Boninal"
            ],
            [
                "uf" => "BA",
                "city" => "Bonito"
            ],
            [
                "uf" => "BA",
                "city" => "Boquira"
            ],
            [
                "uf" => "BA",
                "city" => "Botuporã"
            ],
            [
                "uf" => "BA",
                "city" => "Brejões"
            ],
            [
                "uf" => "BA",
                "city" => "Brejolândia"
            ],
            [
                "uf" => "BA",
                "city" => "Brotas de Macaúbas"
            ],
            [
                "uf" => "BA",
                "city" => "Brumado"
            ],
            [
                "uf" => "BA",
                "city" => "Buerarema"
            ],
            [
                "uf" => "BA",
                "city" => "Buritirama"
            ],
            [
                "uf" => "BA",
                "city" => "Caatiba"
            ],
            [
                "uf" => "BA",
                "city" => "Cabaceiras do Paraguaçu"
            ],
            [
                "uf" => "BA",
                "city" => "Cachoeira"
            ],
            [
                "uf" => "BA",
                "city" => "Caculé"
            ],
            [
                "uf" => "BA",
                "city" => "Caém"
            ],
            [
                "uf" => "BA",
                "city" => "Caetanos"
            ],
            [
                "uf" => "BA",
                "city" => "Caetité"
            ],
            [
                "uf" => "BA",
                "city" => "Cafarnaum"
            ],
            [
                "uf" => "BA",
                "city" => "Cairu"
            ],
            [
                "uf" => "BA",
                "city" => "Caldeirão Grande"
            ],
            [
                "uf" => "BA",
                "city" => "Camacan"
            ],
            [
                "uf" => "BA",
                "city" => "Camaçari"
            ],
            [
                "uf" => "BA",
                "city" => "Camamu"
            ],
            [
                "uf" => "BA",
                "city" => "Campo Alegre de Lourdes"
            ],
            [
                "uf" => "BA",
                "city" => "Campo Formoso"
            ],
            [
                "uf" => "BA",
                "city" => "Canápolis"
            ],
            [
                "uf" => "BA",
                "city" => "Canarana"
            ],
            [
                "uf" => "BA",
                "city" => "Canavieiras"
            ],
            [
                "uf" => "BA",
                "city" => "Candeal"
            ],
            [
                "uf" => "BA",
                "city" => "Candeias"
            ],
            [
                "uf" => "BA",
                "city" => "Candiba"
            ],
            [
                "uf" => "BA",
                "city" => "Cândido Sales"
            ],
            [
                "uf" => "BA",
                "city" => "Cansanção"
            ],
            [
                "uf" => "BA",
                "city" => "Canudos"
            ],
            [
                "uf" => "BA",
                "city" => "Capela do Alto Alegre"
            ],
            [
                "uf" => "BA",
                "city" => "Capim Grosso"
            ],
            [
                "uf" => "BA",
                "city" => "Caraíbas"
            ],
            [
                "uf" => "BA",
                "city" => "Caravelas"
            ],
            [
                "uf" => "BA",
                "city" => "Cardeal da Silva"
            ],
            [
                "uf" => "BA",
                "city" => "Carinhanha"
            ],
            [
                "uf" => "BA",
                "city" => "Casa Nova"
            ],
            [
                "uf" => "BA",
                "city" => "Castro Alves"
            ],
            [
                "uf" => "BA",
                "city" => "Catolândia"
            ],
            [
                "uf" => "BA",
                "city" => "Catu"
            ],
            [
                "uf" => "BA",
                "city" => "Caturama"
            ],
            [
                "uf" => "BA",
                "city" => "Central"
            ],
            [
                "uf" => "BA",
                "city" => "Chorrochó"
            ],
            [
                "uf" => "BA",
                "city" => "Cícero Dantas"
            ],
            [
                "uf" => "BA",
                "city" => "Cipó"
            ],
            [
                "uf" => "BA",
                "city" => "Coaraci"
            ],
            [
                "uf" => "BA",
                "city" => "Cocos"
            ],
            [
                "uf" => "BA",
                "city" => "Conceição da Feira"
            ],
            [
                "uf" => "BA",
                "city" => "Conceição do Almeida"
            ],
            [
                "uf" => "BA",
                "city" => "Conceição do Coité"
            ],
            [
                "uf" => "BA",
                "city" => "Conceição do Jacuípe"
            ],
            [
                "uf" => "BA",
                "city" => "Conde"
            ],
            [
                "uf" => "BA",
                "city" => "Condeúba"
            ],
            [
                "uf" => "BA",
                "city" => "Contendas do Sincorá"
            ],
            [
                "uf" => "BA",
                "city" => "Coração de Maria"
            ],
            [
                "uf" => "BA",
                "city" => "Cordeiros"
            ],
            [
                "uf" => "BA",
                "city" => "Coribe"
            ],
            [
                "uf" => "BA",
                "city" => "Coronel João sá"
            ],
            [
                "uf" => "BA",
                "city" => "Correntina"
            ],
            [
                "uf" => "BA",
                "city" => "Cotegipe"
            ],
            [
                "uf" => "BA",
                "city" => "Cravolândia"
            ],
            [
                "uf" => "BA",
                "city" => "Crisópolis"
            ],
            [
                "uf" => "BA",
                "city" => "Cristópolis"
            ],
            [
                "uf" => "BA",
                "city" => "Cruz Das Almas"
            ],
            [
                "uf" => "BA",
                "city" => "Curaçá"
            ],
            [
                "uf" => "BA",
                "city" => "Dário Meira"
            ],
            [
                "uf" => "BA",
                "city" => "Dias D´ávila"
            ],
            [
                "uf" => "BA",
                "city" => "Dom Basílio"
            ],
            [
                "uf" => "BA",
                "city" => "Dom Macedo Costa"
            ],
            [
                "uf" => "BA",
                "city" => "Elísio Medrado"
            ],
            [
                "uf" => "BA",
                "city" => "Encruzilhada"
            ],
            [
                "uf" => "BA",
                "city" => "Entre Rios"
            ],
            [
                "uf" => "BA",
                "city" => "Esplanada"
            ],
            [
                "uf" => "BA",
                "city" => "Euclides da Cunha"
            ],
            [
                "uf" => "BA",
                "city" => "Eunápolis"
            ],
            [
                "uf" => "BA",
                "city" => "Fátima"
            ],
            [
                "uf" => "BA",
                "city" => "Feira da Mata"
            ],
            [
                "uf" => "BA",
                "city" => "Feira de Santana"
            ],
            [
                "uf" => "BA",
                "city" => "Filadélfia"
            ],
            [
                "uf" => "BA",
                "city" => "Firmino Alves"
            ],
            [
                "uf" => "BA",
                "city" => "Floresta Azul"
            ],
            [
                "uf" => "BA",
                "city" => "Formosa do Rio Preto"
            ],
            [
                "uf" => "BA",
                "city" => "Gandu"
            ],
            [
                "uf" => "BA",
                "city" => "Gavião"
            ],
            [
                "uf" => "BA",
                "city" => "Gentio do Ouro"
            ],
            [
                "uf" => "BA",
                "city" => "Glória"
            ],
            [
                "uf" => "BA",
                "city" => "Gongogi"
            ],
            [
                "uf" => "BA",
                "city" => "Governador Mangabeira"
            ],
            [
                "uf" => "BA",
                "city" => "Guajeru"
            ],
            [
                "uf" => "BA",
                "city" => "Guanambi"
            ],
            [
                "uf" => "BA",
                "city" => "Guaratinga"
            ],
            [
                "uf" => "BA",
                "city" => "Heliópolis"
            ],
            [
                "uf" => "BA",
                "city" => "Iaçu"
            ],
            [
                "uf" => "BA",
                "city" => "Ibiassucê"
            ],
            [
                "uf" => "BA",
                "city" => "Ibicaraí"
            ],
            [
                "uf" => "BA",
                "city" => "Ibicoara"
            ],
            [
                "uf" => "BA",
                "city" => "Ibicuí"
            ],
            [
                "uf" => "BA",
                "city" => "Ibipeba"
            ],
            [
                "uf" => "BA",
                "city" => "Ibipitanga"
            ],
            [
                "uf" => "BA",
                "city" => "Ibiquera"
            ],
            [
                "uf" => "BA",
                "city" => "Ibirapitanga"
            ],
            [
                "uf" => "BA",
                "city" => "Ibirapuã"
            ],
            [
                "uf" => "BA",
                "city" => "Ibirataia"
            ],
            [
                "uf" => "BA",
                "city" => "Ibitiara"
            ],
            [
                "uf" => "BA",
                "city" => "Ibititá"
            ],
            [
                "uf" => "BA",
                "city" => "Ibotirama"
            ],
            [
                "uf" => "BA",
                "city" => "Ichu"
            ],
            [
                "uf" => "BA",
                "city" => "Igaporã"
            ],
            [
                "uf" => "BA",
                "city" => "Igrapiúna"
            ],
            [
                "uf" => "BA",
                "city" => "Iguaí"
            ],
            [
                "uf" => "BA",
                "city" => "Ilhéus"
            ],
            [
                "uf" => "BA",
                "city" => "Inhambupe"
            ],
            [
                "uf" => "BA",
                "city" => "Ipecaetá"
            ],
            [
                "uf" => "BA",
                "city" => "Ipiaú"
            ],
            [
                "uf" => "BA",
                "city" => "Ipirá"
            ],
            [
                "uf" => "BA",
                "city" => "Ipupiara"
            ],
            [
                "uf" => "BA",
                "city" => "Irajuba"
            ],
            [
                "uf" => "BA",
                "city" => "Iramaia"
            ],
            [
                "uf" => "BA",
                "city" => "Iraquara"
            ],
            [
                "uf" => "BA",
                "city" => "Irará"
            ],
            [
                "uf" => "BA",
                "city" => "Irecê"
            ],
            [
                "uf" => "BA",
                "city" => "Itabela"
            ],
            [
                "uf" => "BA",
                "city" => "Itaberaba"
            ],
            [
                "uf" => "BA",
                "city" => "Itabuna"
            ],
            [
                "uf" => "BA",
                "city" => "Itacaré"
            ],
            [
                "uf" => "BA",
                "city" => "Itaeté"
            ],
            [
                "uf" => "BA",
                "city" => "Itagi"
            ],
            [
                "uf" => "BA",
                "city" => "Itagibá"
            ],
            [
                "uf" => "BA",
                "city" => "Itagimirim"
            ],
            [
                "uf" => "BA",
                "city" => "Itaguaçu da Bahia"
            ],
            [
                "uf" => "BA",
                "city" => "Itaju do Colônia"
            ],
            [
                "uf" => "BA",
                "city" => "Itajuípe"
            ],
            [
                "uf" => "BA",
                "city" => "Itamaraju"
            ],
            [
                "uf" => "BA",
                "city" => "Itamari"
            ],
            [
                "uf" => "BA",
                "city" => "Itambé"
            ],
            [
                "uf" => "BA",
                "city" => "Itanagra"
            ],
            [
                "uf" => "BA",
                "city" => "Itanhém"
            ],
            [
                "uf" => "BA",
                "city" => "Itaparica"
            ],
            [
                "uf" => "BA",
                "city" => "Itapé"
            ],
            [
                "uf" => "BA",
                "city" => "Itapebi"
            ],
            [
                "uf" => "BA",
                "city" => "Itapetinga"
            ],
            [
                "uf" => "BA",
                "city" => "Itapicuru"
            ],
            [
                "uf" => "BA",
                "city" => "Itapitanga"
            ],
            [
                "uf" => "BA",
                "city" => "Itaquara"
            ],
            [
                "uf" => "BA",
                "city" => "Itarantim"
            ],
            [
                "uf" => "BA",
                "city" => "Itatim"
            ],
            [
                "uf" => "BA",
                "city" => "Itiruçu"
            ],
            [
                "uf" => "BA",
                "city" => "Itiúba"
            ],
            [
                "uf" => "BA",
                "city" => "Itororó"
            ],
            [
                "uf" => "BA",
                "city" => "Ituaçu"
            ],
            [
                "uf" => "BA",
                "city" => "Ituberá"
            ],
            [
                "uf" => "BA",
                "city" => "Iuiú"
            ],
            [
                "uf" => "BA",
                "city" => "Jaborandi"
            ],
            [
                "uf" => "BA",
                "city" => "Jacaraci"
            ],
            [
                "uf" => "BA",
                "city" => "Jacobina"
            ],
            [
                "uf" => "BA",
                "city" => "Jaguaquara"
            ],
            [
                "uf" => "BA",
                "city" => "Jaguarari"
            ],
            [
                "uf" => "BA",
                "city" => "Jaguaripe"
            ],
            [
                "uf" => "BA",
                "city" => "Jandaíra"
            ],
            [
                "uf" => "BA",
                "city" => "Jequié"
            ],
            [
                "uf" => "BA",
                "city" => "Jeremoabo"
            ],
            [
                "uf" => "BA",
                "city" => "Jiquiriçá"
            ],
            [
                "uf" => "BA",
                "city" => "Jitaúna"
            ],
            [
                "uf" => "BA",
                "city" => "João Dourado"
            ],
            [
                "uf" => "BA",
                "city" => "Juazeiro"
            ],
            [
                "uf" => "BA",
                "city" => "Jucuruçu"
            ],
            [
                "uf" => "BA",
                "city" => "Jussara"
            ],
            [
                "uf" => "BA",
                "city" => "Jussari"
            ],
            [
                "uf" => "BA",
                "city" => "Jussiape"
            ],
            [
                "uf" => "BA",
                "city" => "Lafaiete Coutinho"
            ],
            [
                "uf" => "BA",
                "city" => "Lagoa Real"
            ],
            [
                "uf" => "BA",
                "city" => "Laje"
            ],
            [
                "uf" => "BA",
                "city" => "Lajedão"
            ],
            [
                "uf" => "BA",
                "city" => "Lajedinho"
            ],
            [
                "uf" => "BA",
                "city" => "Lajedo do Tabocal"
            ],
            [
                "uf" => "BA",
                "city" => "Lamarão"
            ],
            [
                "uf" => "BA",
                "city" => "Lapão"
            ],
            [
                "uf" => "BA",
                "city" => "Lauro de Freitas"
            ],
            [
                "uf" => "BA",
                "city" => "Lençóis"
            ],
            [
                "uf" => "BA",
                "city" => "Licínio de Almeida"
            ],
            [
                "uf" => "BA",
                "city" => "Livramento de Nossa Senhora"
            ],
            [
                "uf" => "BA",
                "city" => "Luís Eduardo Magalhães"
            ],
            [
                "uf" => "BA",
                "city" => "Macajuba"
            ],
            [
                "uf" => "BA",
                "city" => "Macarani"
            ],
            [
                "uf" => "BA",
                "city" => "Macaúbas"
            ],
            [
                "uf" => "BA",
                "city" => "Macururé"
            ],
            [
                "uf" => "BA",
                "city" => "Madre de Deus"
            ],
            [
                "uf" => "BA",
                "city" => "Maetinga"
            ],
            [
                "uf" => "BA",
                "city" => "Maiquinique"
            ],
            [
                "uf" => "BA",
                "city" => "Mairi"
            ],
            [
                "uf" => "BA",
                "city" => "Malhada"
            ],
            [
                "uf" => "BA",
                "city" => "Malhada de Pedras"
            ],
            [
                "uf" => "BA",
                "city" => "Manoel Vitorino"
            ],
            [
                "uf" => "BA",
                "city" => "Mansidão"
            ],
            [
                "uf" => "BA",
                "city" => "Maracás"
            ],
            [
                "uf" => "BA",
                "city" => "Maragogipe"
            ],
            [
                "uf" => "BA",
                "city" => "Maraú"
            ],
            [
                "uf" => "BA",
                "city" => "Marcionílio Souza"
            ],
            [
                "uf" => "BA",
                "city" => "Mascote"
            ],
            [
                "uf" => "BA",
                "city" => "Mata de São João"
            ],
            [
                "uf" => "BA",
                "city" => "Matina"
            ],
            [
                "uf" => "BA",
                "city" => "Medeiros Neto"
            ],
            [
                "uf" => "BA",
                "city" => "Miguel Calmon"
            ],
            [
                "uf" => "BA",
                "city" => "Milagres"
            ],
            [
                "uf" => "BA",
                "city" => "Mirangaba"
            ],
            [
                "uf" => "BA",
                "city" => "Mirante"
            ],
            [
                "uf" => "BA",
                "city" => "Monte Santo"
            ],
            [
                "uf" => "BA",
                "city" => "Morpará"
            ],
            [
                "uf" => "BA",
                "city" => "Morro do Chapéu"
            ],
            [
                "uf" => "BA",
                "city" => "Mortugaba"
            ],
            [
                "uf" => "BA",
                "city" => "Mucugê"
            ],
            [
                "uf" => "BA",
                "city" => "Mucuri"
            ],
            [
                "uf" => "BA",
                "city" => "Mulungu do Morro"
            ],
            [
                "uf" => "BA",
                "city" => "Mundo Novo"
            ],
            [
                "uf" => "BA",
                "city" => "Muniz Ferreira"
            ],
            [
                "uf" => "BA",
                "city" => "Muquém de São Francisco"
            ],
            [
                "uf" => "BA",
                "city" => "Muritiba"
            ],
            [
                "uf" => "BA",
                "city" => "Mutuípe"
            ],
            [
                "uf" => "BA",
                "city" => "Nazaré"
            ],
            [
                "uf" => "BA",
                "city" => "Nilo Peçanha"
            ],
            [
                "uf" => "BA",
                "city" => "Nordestina"
            ],
            [
                "uf" => "BA",
                "city" => "Nova Canaã"
            ],
            [
                "uf" => "BA",
                "city" => "Nova Fátima"
            ],
            [
                "uf" => "BA",
                "city" => "Nova Ibiá"
            ],
            [
                "uf" => "BA",
                "city" => "Nova Itarana"
            ],
            [
                "uf" => "BA",
                "city" => "Nova Redenção"
            ],
            [
                "uf" => "BA",
                "city" => "Nova Soure"
            ],
            [
                "uf" => "BA",
                "city" => "Nova Viçosa"
            ],
            [
                "uf" => "BA",
                "city" => "Novo Horizonte"
            ],
            [
                "uf" => "BA",
                "city" => "Novo Triunfo"
            ],
            [
                "uf" => "BA",
                "city" => "Olindina"
            ],
            [
                "uf" => "BA",
                "city" => "Oliveira Dos Brejinhos"
            ],
            [
                "uf" => "BA",
                "city" => "Ouriçangas"
            ],
            [
                "uf" => "BA",
                "city" => "Ourolândia"
            ],
            [
                "uf" => "BA",
                "city" => "Palmas de Monte Alto"
            ],
            [
                "uf" => "BA",
                "city" => "Palmeiras"
            ],
            [
                "uf" => "BA",
                "city" => "Paramirim"
            ],
            [
                "uf" => "BA",
                "city" => "Paratinga"
            ],
            [
                "uf" => "BA",
                "city" => "Paripiranga"
            ],
            [
                "uf" => "BA",
                "city" => "Pau Brasil"
            ],
            [
                "uf" => "BA",
                "city" => "Paulo Afonso"
            ],
            [
                "uf" => "BA",
                "city" => "pé de Serra"
            ],
            [
                "uf" => "BA",
                "city" => "Pedrão"
            ],
            [
                "uf" => "BA",
                "city" => "Pedro Alexandre"
            ],
            [
                "uf" => "BA",
                "city" => "Piatã"
            ],
            [
                "uf" => "BA",
                "city" => "Pilão Arcado"
            ],
            [
                "uf" => "BA",
                "city" => "Pindaí"
            ],
            [
                "uf" => "BA",
                "city" => "Pindobaçu"
            ],
            [
                "uf" => "BA",
                "city" => "Pintadas"
            ],
            [
                "uf" => "BA",
                "city" => "Piraí do Norte"
            ],
            [
                "uf" => "BA",
                "city" => "Piripá"
            ],
            [
                "uf" => "BA",
                "city" => "Piritiba"
            ],
            [
                "uf" => "BA",
                "city" => "Planaltino"
            ],
            [
                "uf" => "BA",
                "city" => "Planalto"
            ],
            [
                "uf" => "BA",
                "city" => "Poções"
            ],
            [
                "uf" => "BA",
                "city" => "Pojuca"
            ],
            [
                "uf" => "BA",
                "city" => "Ponto Novo"
            ],
            [
                "uf" => "BA",
                "city" => "Porto Seguro"
            ],
            [
                "uf" => "BA",
                "city" => "Potiraguá"
            ],
            [
                "uf" => "BA",
                "city" => "Prado"
            ],
            [
                "uf" => "BA",
                "city" => "Presidente Dutra"
            ],
            [
                "uf" => "BA",
                "city" => "Presidente Jânio Quadros"
            ],
            [
                "uf" => "BA",
                "city" => "Presidente Tancredo Neves"
            ],
            [
                "uf" => "BA",
                "city" => "Queimadas"
            ],
            [
                "uf" => "BA",
                "city" => "Quijingue"
            ],
            [
                "uf" => "BA",
                "city" => "Quixabeira"
            ],
            [
                "uf" => "BA",
                "city" => "Rafael Jambeiro"
            ],
            [
                "uf" => "BA",
                "city" => "Remanso"
            ],
            [
                "uf" => "BA",
                "city" => "Retirolândia"
            ],
            [
                "uf" => "BA",
                "city" => "Riachão Das Neves"
            ],
            [
                "uf" => "BA",
                "city" => "Riachão do Jacuípe"
            ],
            [
                "uf" => "BA",
                "city" => "Riacho de Santana"
            ],
            [
                "uf" => "BA",
                "city" => "Ribeira do Amparo"
            ],
            [
                "uf" => "BA",
                "city" => "Ribeira do Pombal"
            ],
            [
                "uf" => "BA",
                "city" => "Ribeirão do Largo"
            ],
            [
                "uf" => "BA",
                "city" => "Rio de Contas"
            ],
            [
                "uf" => "BA",
                "city" => "Rio do Antônio"
            ],
            [
                "uf" => "BA",
                "city" => "Rio do Pires"
            ],
            [
                "uf" => "BA",
                "city" => "Rio Real"
            ],
            [
                "uf" => "BA",
                "city" => "Rodelas"
            ],
            [
                "uf" => "BA",
                "city" => "Ruy Barbosa"
            ],
            [
                "uf" => "BA",
                "city" => "Salinas da Margarida"
            ],
            [
                "uf" => "BA",
                "city" => "Salvador"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Bárbara"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Brígida"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Cruz Cabrália"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Cruz da Vitória"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Inês"
            ],
            [
                "uf" => "BA",
                "city" => "Santaluz"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Luzia"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Maria da Vitória"
            ],
            [
                "uf" => "BA",
                "city" => "Santana"
            ],
            [
                "uf" => "BA",
                "city" => "Santanópolis"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Rita de Cássia"
            ],
            [
                "uf" => "BA",
                "city" => "Santa Teresinha"
            ],
            [
                "uf" => "BA",
                "city" => "Santo Amaro"
            ],
            [
                "uf" => "BA",
                "city" => "Santo Antônio de Jesus"
            ],
            [
                "uf" => "BA",
                "city" => "Santo Estêvão"
            ],
            [
                "uf" => "BA",
                "city" => "São Desidério"
            ],
            [
                "uf" => "BA",
                "city" => "São Domingos"
            ],
            [
                "uf" => "BA",
                "city" => "São Félix"
            ],
            [
                "uf" => "BA",
                "city" => "São Félix do Coribe"
            ],
            [
                "uf" => "BA",
                "city" => "São Felipe"
            ],
            [
                "uf" => "BA",
                "city" => "São Francisco do Conde"
            ],
            [
                "uf" => "BA",
                "city" => "São Gabriel"
            ],
            [
                "uf" => "BA",
                "city" => "São Gonçalo Dos Campos"
            ],
            [
                "uf" => "BA",
                "city" => "São José da Vitória"
            ],
            [
                "uf" => "BA",
                "city" => "São José do Jacuípe"
            ],
            [
                "uf" => "BA",
                "city" => "São Miguel Das Matas"
            ],
            [
                "uf" => "BA",
                "city" => "São Sebastião do Passé"
            ],
            [
                "uf" => "BA",
                "city" => "Sapeaçu"
            ],
            [
                "uf" => "BA",
                "city" => "Sátiro Dias"
            ],
            [
                "uf" => "BA",
                "city" => "Saubara"
            ],
            [
                "uf" => "BA",
                "city" => "Saúde"
            ],
            [
                "uf" => "BA",
                "city" => "Seabra"
            ],
            [
                "uf" => "BA",
                "city" => "Sebastião Laranjeiras"
            ],
            [
                "uf" => "BA",
                "city" => "Senhor do Bonfim"
            ],
            [
                "uf" => "BA",
                "city" => "Serra do Ramalho"
            ],
            [
                "uf" => "BA",
                "city" => "Sento sé"
            ],
            [
                "uf" => "BA",
                "city" => "Serra Dourada"
            ],
            [
                "uf" => "BA",
                "city" => "Serra Preta"
            ],
            [
                "uf" => "BA",
                "city" => "Serrinha"
            ],
            [
                "uf" => "BA",
                "city" => "Serrolândia"
            ],
            [
                "uf" => "BA",
                "city" => "Simões Filho"
            ],
            [
                "uf" => "BA",
                "city" => "Sítio do Mato"
            ],
            [
                "uf" => "BA",
                "city" => "Sítio do Quinto"
            ],
            [
                "uf" => "BA",
                "city" => "Sobradinho"
            ],
            [
                "uf" => "BA",
                "city" => "Souto Soares"
            ],
            [
                "uf" => "BA",
                "city" => "Tabocas do Brejo Velho"
            ],
            [
                "uf" => "BA",
                "city" => "Tanhaçu"
            ],
            [
                "uf" => "BA",
                "city" => "Tanque Novo"
            ],
            [
                "uf" => "BA",
                "city" => "Tanquinho"
            ],
            [
                "uf" => "BA",
                "city" => "Taperoá"
            ],
            [
                "uf" => "BA",
                "city" => "Tapiramutá"
            ],
            [
                "uf" => "BA",
                "city" => "Teixeira de Freitas"
            ],
            [
                "uf" => "BA",
                "city" => "Teodoro Sampaio"
            ],
            [
                "uf" => "BA",
                "city" => "Teofilândia"
            ],
            [
                "uf" => "BA",
                "city" => "Teolândia"
            ],
            [
                "uf" => "BA",
                "city" => "Terra Nova"
            ],
            [
                "uf" => "BA",
                "city" => "Tremedal"
            ],
            [
                "uf" => "BA",
                "city" => "Tucano"
            ],
            [
                "uf" => "BA",
                "city" => "Uauá"
            ],
            [
                "uf" => "BA",
                "city" => "Ubaíra"
            ],
            [
                "uf" => "BA",
                "city" => "Ubaitaba"
            ],
            [
                "uf" => "BA",
                "city" => "Ubatã"
            ],
            [
                "uf" => "BA",
                "city" => "Uibaí"
            ],
            [
                "uf" => "BA",
                "city" => "Umburanas"
            ],
            [
                "uf" => "BA",
                "city" => "Una"
            ],
            [
                "uf" => "BA",
                "city" => "Urandi"
            ],
            [
                "uf" => "BA",
                "city" => "Uruçuca"
            ],
            [
                "uf" => "BA",
                "city" => "Utinga"
            ],
            [
                "uf" => "BA",
                "city" => "Valença"
            ],
            [
                "uf" => "BA",
                "city" => "Valente"
            ],
            [
                "uf" => "BA",
                "city" => "Várzea da Roça"
            ],
            [
                "uf" => "BA",
                "city" => "Várzea do Poço"
            ],
            [
                "uf" => "BA",
                "city" => "Várzea Nova"
            ],
            [
                "uf" => "BA",
                "city" => "Varzedo"
            ],
            [
                "uf" => "BA",
                "city" => "Vera Cruz"
            ],
            [
                "uf" => "BA",
                "city" => "Vereda"
            ],
            [
                "uf" => "BA",
                "city" => "Vitória da Conquista"
            ],
            [
                "uf" => "BA",
                "city" => "Wagner"
            ],
            [
                "uf" => "BA",
                "city" => "Wanderley"
            ],
            [
                "uf" => "BA",
                "city" => "Wenceslau Guimarães"
            ],
            [
                "uf" => "BA",
                "city" => "Xique-xique"
            ],
            [
                "uf" => "MG",
                "city" => "Abadia Dos Dourados"
            ],
            [
                "uf" => "MG",
                "city" => "Abaeté"
            ],
            [
                "uf" => "MG",
                "city" => "Abre Campo"
            ],
            [
                "uf" => "MG",
                "city" => "Acaiaca"
            ],
            [
                "uf" => "MG",
                "city" => "Açucena"
            ],
            [
                "uf" => "MG",
                "city" => "Água Boa"
            ],
            [
                "uf" => "MG",
                "city" => "Água Comprida"
            ],
            [
                "uf" => "MG",
                "city" => "Aguanil"
            ],
            [
                "uf" => "MG",
                "city" => "Águas Formosas"
            ],
            [
                "uf" => "MG",
                "city" => "Águas Vermelhas"
            ],
            [
                "uf" => "MG",
                "city" => "Aimorés"
            ],
            [
                "uf" => "MG",
                "city" => "Aiuruoca"
            ],
            [
                "uf" => "MG",
                "city" => "Alagoa"
            ],
            [
                "uf" => "MG",
                "city" => "Albertina"
            ],
            [
                "uf" => "MG",
                "city" => "Além Paraíba"
            ],
            [
                "uf" => "MG",
                "city" => "Alfenas"
            ],
            [
                "uf" => "MG",
                "city" => "Alfredo Vasconcelos"
            ],
            [
                "uf" => "MG",
                "city" => "Almenara"
            ],
            [
                "uf" => "MG",
                "city" => "Alpercata"
            ],
            [
                "uf" => "MG",
                "city" => "Alpinópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Alterosa"
            ],
            [
                "uf" => "MG",
                "city" => "Alto Caparaó"
            ],
            [
                "uf" => "MG",
                "city" => "Alto Rio Doce"
            ],
            [
                "uf" => "MG",
                "city" => "Alvarenga"
            ],
            [
                "uf" => "MG",
                "city" => "Alvinópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Alvorada de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Amparo do Serra"
            ],
            [
                "uf" => "MG",
                "city" => "Andradas"
            ],
            [
                "uf" => "MG",
                "city" => "Cachoeira de Pajeú"
            ],
            [
                "uf" => "MG",
                "city" => "Andrelândia"
            ],
            [
                "uf" => "MG",
                "city" => "Angelândia"
            ],
            [
                "uf" => "MG",
                "city" => "Antônio Carlos"
            ],
            [
                "uf" => "MG",
                "city" => "Antônio Dias"
            ],
            [
                "uf" => "MG",
                "city" => "Antônio Prado de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Araçaí"
            ],
            [
                "uf" => "MG",
                "city" => "Aracitaba"
            ],
            [
                "uf" => "MG",
                "city" => "Araçuaí"
            ],
            [
                "uf" => "MG",
                "city" => "Araguari"
            ],
            [
                "uf" => "MG",
                "city" => "Arantina"
            ],
            [
                "uf" => "MG",
                "city" => "Araponga"
            ],
            [
                "uf" => "MG",
                "city" => "Araporã"
            ],
            [
                "uf" => "MG",
                "city" => "Arapuá"
            ],
            [
                "uf" => "MG",
                "city" => "Araújos"
            ],
            [
                "uf" => "MG",
                "city" => "Araxá"
            ],
            [
                "uf" => "MG",
                "city" => "Arceburgo"
            ],
            [
                "uf" => "MG",
                "city" => "Arcos"
            ],
            [
                "uf" => "MG",
                "city" => "Areado"
            ],
            [
                "uf" => "MG",
                "city" => "Argirita"
            ],
            [
                "uf" => "MG",
                "city" => "Aricanduva"
            ],
            [
                "uf" => "MG",
                "city" => "Arinos"
            ],
            [
                "uf" => "MG",
                "city" => "Astolfo Dutra"
            ],
            [
                "uf" => "MG",
                "city" => "Ataléia"
            ],
            [
                "uf" => "MG",
                "city" => "Augusto de Lima"
            ],
            [
                "uf" => "MG",
                "city" => "Baependi"
            ],
            [
                "uf" => "MG",
                "city" => "Baldim"
            ],
            [
                "uf" => "MG",
                "city" => "Bambuí"
            ],
            [
                "uf" => "MG",
                "city" => "Bandeira"
            ],
            [
                "uf" => "MG",
                "city" => "Bandeira do Sul"
            ],
            [
                "uf" => "MG",
                "city" => "Barão de Cocais"
            ],
            [
                "uf" => "MG",
                "city" => "Barão de Monte Alto"
            ],
            [
                "uf" => "MG",
                "city" => "Barbacena"
            ],
            [
                "uf" => "MG",
                "city" => "Barra Longa"
            ],
            [
                "uf" => "MG",
                "city" => "Barroso"
            ],
            [
                "uf" => "MG",
                "city" => "Bela Vista de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Belmiro Braga"
            ],
            [
                "uf" => "MG",
                "city" => "Belo Horizonte"
            ],
            [
                "uf" => "MG",
                "city" => "Belo Oriente"
            ],
            [
                "uf" => "MG",
                "city" => "Belo Vale"
            ],
            [
                "uf" => "MG",
                "city" => "Berilo"
            ],
            [
                "uf" => "MG",
                "city" => "Bertópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Berizal"
            ],
            [
                "uf" => "MG",
                "city" => "Betim"
            ],
            [
                "uf" => "MG",
                "city" => "Bias Fortes"
            ],
            [
                "uf" => "MG",
                "city" => "Bicas"
            ],
            [
                "uf" => "MG",
                "city" => "Biquinhas"
            ],
            [
                "uf" => "MG",
                "city" => "Boa Esperança"
            ],
            [
                "uf" => "MG",
                "city" => "Bocaina de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Bocaiúva"
            ],
            [
                "uf" => "MG",
                "city" => "Bom Despacho"
            ],
            [
                "uf" => "MG",
                "city" => "Bom Jardim de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Bom Jesus da Penha"
            ],
            [
                "uf" => "MG",
                "city" => "Bom Jesus do Amparo"
            ],
            [
                "uf" => "MG",
                "city" => "Bom Jesus do Galho"
            ],
            [
                "uf" => "MG",
                "city" => "Bom Repouso"
            ],
            [
                "uf" => "MG",
                "city" => "Bom Sucesso"
            ],
            [
                "uf" => "MG",
                "city" => "Bonfim"
            ],
            [
                "uf" => "MG",
                "city" => "Bonfinópolis de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Bonito de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Borda da Mata"
            ],
            [
                "uf" => "MG",
                "city" => "Botelhos"
            ],
            [
                "uf" => "MG",
                "city" => "Botumirim"
            ],
            [
                "uf" => "MG",
                "city" => "Brasilândia de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Brasília de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Brás Pires"
            ],
            [
                "uf" => "MG",
                "city" => "Braúnas"
            ],
            [
                "uf" => "MG",
                "city" => "Brasópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Brumadinho"
            ],
            [
                "uf" => "MG",
                "city" => "Bueno Brandão"
            ],
            [
                "uf" => "MG",
                "city" => "Buenópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Bugre"
            ],
            [
                "uf" => "MG",
                "city" => "Buritis"
            ],
            [
                "uf" => "MG",
                "city" => "Buritizeiro"
            ],
            [
                "uf" => "MG",
                "city" => "Cabeceira Grande"
            ],
            [
                "uf" => "MG",
                "city" => "Cabo Verde"
            ],
            [
                "uf" => "MG",
                "city" => "Cachoeira da Prata"
            ],
            [
                "uf" => "MG",
                "city" => "Cachoeira de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Cachoeira Dourada"
            ],
            [
                "uf" => "MG",
                "city" => "Caetanópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Caeté"
            ],
            [
                "uf" => "MG",
                "city" => "Caiana"
            ],
            [
                "uf" => "MG",
                "city" => "Cajuri"
            ],
            [
                "uf" => "MG",
                "city" => "Caldas"
            ],
            [
                "uf" => "MG",
                "city" => "Camacho"
            ],
            [
                "uf" => "MG",
                "city" => "Camanducaia"
            ],
            [
                "uf" => "MG",
                "city" => "Cambuí"
            ],
            [
                "uf" => "MG",
                "city" => "Cambuquira"
            ],
            [
                "uf" => "MG",
                "city" => "Campanário"
            ],
            [
                "uf" => "MG",
                "city" => "Campanha"
            ],
            [
                "uf" => "MG",
                "city" => "Campestre"
            ],
            [
                "uf" => "MG",
                "city" => "Campina Verde"
            ],
            [
                "uf" => "MG",
                "city" => "Campo Azul"
            ],
            [
                "uf" => "MG",
                "city" => "Campo Belo"
            ],
            [
                "uf" => "MG",
                "city" => "Campo do Meio"
            ],
            [
                "uf" => "MG",
                "city" => "Campo Florido"
            ],
            [
                "uf" => "MG",
                "city" => "Campos Altos"
            ],
            [
                "uf" => "MG",
                "city" => "Campos Gerais"
            ],
            [
                "uf" => "MG",
                "city" => "Canaã"
            ],
            [
                "uf" => "MG",
                "city" => "Canápolis"
            ],
            [
                "uf" => "MG",
                "city" => "Cana Verde"
            ],
            [
                "uf" => "MG",
                "city" => "Candeias"
            ],
            [
                "uf" => "MG",
                "city" => "Cantagalo"
            ],
            [
                "uf" => "MG",
                "city" => "Caparaó"
            ],
            [
                "uf" => "MG",
                "city" => "Capela Nova"
            ],
            [
                "uf" => "MG",
                "city" => "Capelinha"
            ],
            [
                "uf" => "MG",
                "city" => "Capetinga"
            ],
            [
                "uf" => "MG",
                "city" => "Capim Branco"
            ],
            [
                "uf" => "MG",
                "city" => "Capinópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Capitão Andrade"
            ],
            [
                "uf" => "MG",
                "city" => "Capitão Enéas"
            ],
            [
                "uf" => "MG",
                "city" => "Capitólio"
            ],
            [
                "uf" => "MG",
                "city" => "Caputira"
            ],
            [
                "uf" => "MG",
                "city" => "Caraí"
            ],
            [
                "uf" => "MG",
                "city" => "Caranaíba"
            ],
            [
                "uf" => "MG",
                "city" => "Carandaí"
            ],
            [
                "uf" => "MG",
                "city" => "Carangola"
            ],
            [
                "uf" => "MG",
                "city" => "Caratinga"
            ],
            [
                "uf" => "MG",
                "city" => "Carbonita"
            ],
            [
                "uf" => "MG",
                "city" => "Careaçu"
            ],
            [
                "uf" => "MG",
                "city" => "Carlos Chagas"
            ],
            [
                "uf" => "MG",
                "city" => "Carmésia"
            ],
            [
                "uf" => "MG",
                "city" => "Carmo da Cachoeira"
            ],
            [
                "uf" => "MG",
                "city" => "Carmo da Mata"
            ],
            [
                "uf" => "MG",
                "city" => "Carmo de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Carmo do Cajuru"
            ],
            [
                "uf" => "MG",
                "city" => "Carmo do Paranaíba"
            ],
            [
                "uf" => "MG",
                "city" => "Carmo do Rio Claro"
            ],
            [
                "uf" => "MG",
                "city" => "Carmópolis de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Carneirinho"
            ],
            [
                "uf" => "MG",
                "city" => "Carrancas"
            ],
            [
                "uf" => "MG",
                "city" => "Carvalhópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Carvalhos"
            ],
            [
                "uf" => "MG",
                "city" => "Casa Grande"
            ],
            [
                "uf" => "MG",
                "city" => "Cascalho Rico"
            ],
            [
                "uf" => "MG",
                "city" => "Cássia"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição da Barra de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Cataguases"
            ],
            [
                "uf" => "MG",
                "city" => "Catas Altas"
            ],
            [
                "uf" => "MG",
                "city" => "Catas Altas da Noruega"
            ],
            [
                "uf" => "MG",
                "city" => "Catuji"
            ],
            [
                "uf" => "MG",
                "city" => "Catuti"
            ],
            [
                "uf" => "MG",
                "city" => "Caxambu"
            ],
            [
                "uf" => "MG",
                "city" => "Cedro do Abaeté"
            ],
            [
                "uf" => "MG",
                "city" => "Central de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Centralina"
            ],
            [
                "uf" => "MG",
                "city" => "Chácara"
            ],
            [
                "uf" => "MG",
                "city" => "Chalé"
            ],
            [
                "uf" => "MG",
                "city" => "Chapada do Norte"
            ],
            [
                "uf" => "MG",
                "city" => "Chapada Gaúcha"
            ],
            [
                "uf" => "MG",
                "city" => "Chiador"
            ],
            [
                "uf" => "MG",
                "city" => "Cipotânea"
            ],
            [
                "uf" => "MG",
                "city" => "Claraval"
            ],
            [
                "uf" => "MG",
                "city" => "Claro Dos Poções"
            ],
            [
                "uf" => "MG",
                "city" => "Cláudio"
            ],
            [
                "uf" => "MG",
                "city" => "Coimbra"
            ],
            [
                "uf" => "MG",
                "city" => "Coluna"
            ],
            [
                "uf" => "MG",
                "city" => "Comendador Gomes"
            ],
            [
                "uf" => "MG",
                "city" => "Comercinho"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição da Aparecida"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição Das Pedras"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição Das Alagoas"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição de Ipanema"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição do Mato Dentro"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição do Pará"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição do Rio Verde"
            ],
            [
                "uf" => "MG",
                "city" => "Conceição Dos Ouros"
            ],
            [
                "uf" => "MG",
                "city" => "Cônego Marinho"
            ],
            [
                "uf" => "MG",
                "city" => "Confins"
            ],
            [
                "uf" => "MG",
                "city" => "Congonhal"
            ],
            [
                "uf" => "MG",
                "city" => "Congonhas"
            ],
            [
                "uf" => "MG",
                "city" => "Congonhas do Norte"
            ],
            [
                "uf" => "MG",
                "city" => "Conquista"
            ],
            [
                "uf" => "MG",
                "city" => "Conselheiro Lafaiete"
            ],
            [
                "uf" => "MG",
                "city" => "Conselheiro Pena"
            ],
            [
                "uf" => "MG",
                "city" => "Consolação"
            ],
            [
                "uf" => "MG",
                "city" => "Contagem"
            ],
            [
                "uf" => "MG",
                "city" => "Coqueiral"
            ],
            [
                "uf" => "MG",
                "city" => "Coração de Jesus"
            ],
            [
                "uf" => "MG",
                "city" => "Cordisburgo"
            ],
            [
                "uf" => "MG",
                "city" => "Cordislândia"
            ],
            [
                "uf" => "MG",
                "city" => "Corinto"
            ],
            [
                "uf" => "MG",
                "city" => "Coroaci"
            ],
            [
                "uf" => "MG",
                "city" => "Coromandel"
            ],
            [
                "uf" => "MG",
                "city" => "Coronel Fabriciano"
            ],
            [
                "uf" => "MG",
                "city" => "Coronel Murta"
            ],
            [
                "uf" => "MG",
                "city" => "Coronel Pacheco"
            ],
            [
                "uf" => "MG",
                "city" => "Coronel Xavier Chaves"
            ],
            [
                "uf" => "MG",
                "city" => "Córrego Danta"
            ],
            [
                "uf" => "MG",
                "city" => "Córrego do Bom Jesus"
            ],
            [
                "uf" => "MG",
                "city" => "Córrego Fundo"
            ],
            [
                "uf" => "MG",
                "city" => "Córrego Novo"
            ],
            [
                "uf" => "MG",
                "city" => "Couto de Magalhães de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Crisólita"
            ],
            [
                "uf" => "MG",
                "city" => "Cristais"
            ],
            [
                "uf" => "MG",
                "city" => "Cristália"
            ],
            [
                "uf" => "MG",
                "city" => "Cristiano Otoni"
            ],
            [
                "uf" => "MG",
                "city" => "Cristina"
            ],
            [
                "uf" => "MG",
                "city" => "Crucilândia"
            ],
            [
                "uf" => "MG",
                "city" => "Cruzeiro da Fortaleza"
            ],
            [
                "uf" => "MG",
                "city" => "Cruzília"
            ],
            [
                "uf" => "MG",
                "city" => "Cuparaque"
            ],
            [
                "uf" => "MG",
                "city" => "Curral de Dentro"
            ],
            [
                "uf" => "MG",
                "city" => "Curvelo"
            ],
            [
                "uf" => "MG",
                "city" => "Datas"
            ],
            [
                "uf" => "MG",
                "city" => "Delfim Moreira"
            ],
            [
                "uf" => "MG",
                "city" => "Delfinópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Delta"
            ],
            [
                "uf" => "MG",
                "city" => "Descoberto"
            ],
            [
                "uf" => "MG",
                "city" => "Desterro de Entre Rios"
            ],
            [
                "uf" => "MG",
                "city" => "Desterro do Melo"
            ],
            [
                "uf" => "MG",
                "city" => "Diamantina"
            ],
            [
                "uf" => "MG",
                "city" => "Diogo de Vasconcelos"
            ],
            [
                "uf" => "MG",
                "city" => "Dionísio"
            ],
            [
                "uf" => "MG",
                "city" => "Divinésia"
            ],
            [
                "uf" => "MG",
                "city" => "Divino"
            ],
            [
                "uf" => "MG",
                "city" => "Divino Das Laranjeiras"
            ],
            [
                "uf" => "MG",
                "city" => "Divinolândia de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Divinópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Divisa Alegre"
            ],
            [
                "uf" => "MG",
                "city" => "Divisa Nova"
            ],
            [
                "uf" => "MG",
                "city" => "Divisópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Dom Bosco"
            ],
            [
                "uf" => "MG",
                "city" => "Dom Cavati"
            ],
            [
                "uf" => "MG",
                "city" => "Dom Joaquim"
            ],
            [
                "uf" => "MG",
                "city" => "Dom Silvério"
            ],
            [
                "uf" => "MG",
                "city" => "Dom Viçoso"
            ],
            [
                "uf" => "MG",
                "city" => "Dona Eusébia"
            ],
            [
                "uf" => "MG",
                "city" => "Dores de Campos"
            ],
            [
                "uf" => "MG",
                "city" => "Dores de Guanhães"
            ],
            [
                "uf" => "MG",
                "city" => "Dores do Indaiá"
            ],
            [
                "uf" => "MG",
                "city" => "Dores do Turvo"
            ],
            [
                "uf" => "MG",
                "city" => "Doresópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Douradoquara"
            ],
            [
                "uf" => "MG",
                "city" => "Durandé"
            ],
            [
                "uf" => "MG",
                "city" => "Elói Mendes"
            ],
            [
                "uf" => "MG",
                "city" => "Engenheiro Caldas"
            ],
            [
                "uf" => "MG",
                "city" => "Engenheiro Navarro"
            ],
            [
                "uf" => "MG",
                "city" => "Entre Folhas"
            ],
            [
                "uf" => "MG",
                "city" => "Entre Rios de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Ervália"
            ],
            [
                "uf" => "MG",
                "city" => "Esmeraldas"
            ],
            [
                "uf" => "MG",
                "city" => "Espera Feliz"
            ],
            [
                "uf" => "MG",
                "city" => "Espinosa"
            ],
            [
                "uf" => "MG",
                "city" => "Espírito Santo do Dourado"
            ],
            [
                "uf" => "MG",
                "city" => "Estiva"
            ],
            [
                "uf" => "MG",
                "city" => "Estrela Dalva"
            ],
            [
                "uf" => "MG",
                "city" => "Estrela do Indaiá"
            ],
            [
                "uf" => "MG",
                "city" => "Estrela do Sul"
            ],
            [
                "uf" => "MG",
                "city" => "Eugenópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Ewbank da Câmara"
            ],
            [
                "uf" => "MG",
                "city" => "Extrema"
            ],
            [
                "uf" => "MG",
                "city" => "Fama"
            ],
            [
                "uf" => "MG",
                "city" => "Faria Lemos"
            ],
            [
                "uf" => "MG",
                "city" => "Felício Dos Santos"
            ],
            [
                "uf" => "MG",
                "city" => "São Gonçalo do Rio Preto"
            ],
            [
                "uf" => "MG",
                "city" => "Felisburgo"
            ],
            [
                "uf" => "MG",
                "city" => "Felixlândia"
            ],
            [
                "uf" => "MG",
                "city" => "Fernandes Tourinho"
            ],
            [
                "uf" => "MG",
                "city" => "Ferros"
            ],
            [
                "uf" => "MG",
                "city" => "Fervedouro"
            ],
            [
                "uf" => "MG",
                "city" => "Florestal"
            ],
            [
                "uf" => "MG",
                "city" => "Formiga"
            ],
            [
                "uf" => "MG",
                "city" => "Formoso"
            ],
            [
                "uf" => "MG",
                "city" => "Fortaleza de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Fortuna de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Francisco Badaró"
            ],
            [
                "uf" => "MG",
                "city" => "Francisco Dumont"
            ],
            [
                "uf" => "MG",
                "city" => "Francisco sá"
            ],
            [
                "uf" => "MG",
                "city" => "Franciscópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Frei Gaspar"
            ],
            [
                "uf" => "MG",
                "city" => "Frei Inocêncio"
            ],
            [
                "uf" => "MG",
                "city" => "Frei Lagonegro"
            ],
            [
                "uf" => "MG",
                "city" => "Fronteira"
            ],
            [
                "uf" => "MG",
                "city" => "Fronteira Dos Vales"
            ],
            [
                "uf" => "MG",
                "city" => "Fruta de Leite"
            ],
            [
                "uf" => "MG",
                "city" => "Frutal"
            ],
            [
                "uf" => "MG",
                "city" => "Funilândia"
            ],
            [
                "uf" => "MG",
                "city" => "Galiléia"
            ],
            [
                "uf" => "MG",
                "city" => "Gameleiras"
            ],
            [
                "uf" => "MG",
                "city" => "Glaucilândia"
            ],
            [
                "uf" => "MG",
                "city" => "Goiabeira"
            ],
            [
                "uf" => "MG",
                "city" => "Goianá"
            ],
            [
                "uf" => "MG",
                "city" => "Gonçalves"
            ],
            [
                "uf" => "MG",
                "city" => "Gonzaga"
            ],
            [
                "uf" => "MG",
                "city" => "Gouveia"
            ],
            [
                "uf" => "MG",
                "city" => "Governador Valadares"
            ],
            [
                "uf" => "MG",
                "city" => "Grão Mogol"
            ],
            [
                "uf" => "MG",
                "city" => "Grupiara"
            ],
            [
                "uf" => "MG",
                "city" => "Guanhães"
            ],
            [
                "uf" => "MG",
                "city" => "Guapé"
            ],
            [
                "uf" => "MG",
                "city" => "Guaraciaba"
            ],
            [
                "uf" => "MG",
                "city" => "Guaraciama"
            ],
            [
                "uf" => "MG",
                "city" => "Guaranésia"
            ],
            [
                "uf" => "MG",
                "city" => "Guarani"
            ],
            [
                "uf" => "MG",
                "city" => "Guarará"
            ],
            [
                "uf" => "MG",
                "city" => "Guarda-mor"
            ],
            [
                "uf" => "MG",
                "city" => "Guaxupé"
            ],
            [
                "uf" => "MG",
                "city" => "Guidoval"
            ],
            [
                "uf" => "MG",
                "city" => "Guimarânia"
            ],
            [
                "uf" => "MG",
                "city" => "Guiricema"
            ],
            [
                "uf" => "MG",
                "city" => "Gurinhatã"
            ],
            [
                "uf" => "MG",
                "city" => "Heliodora"
            ],
            [
                "uf" => "MG",
                "city" => "Iapu"
            ],
            [
                "uf" => "MG",
                "city" => "Ibertioga"
            ],
            [
                "uf" => "MG",
                "city" => "Ibiá"
            ],
            [
                "uf" => "MG",
                "city" => "Ibiaí"
            ],
            [
                "uf" => "MG",
                "city" => "Ibiracatu"
            ],
            [
                "uf" => "MG",
                "city" => "Ibiraci"
            ],
            [
                "uf" => "MG",
                "city" => "Ibirité"
            ],
            [
                "uf" => "MG",
                "city" => "Ibitiúra de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Ibituruna"
            ],
            [
                "uf" => "MG",
                "city" => "Icaraí de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Igarapé"
            ],
            [
                "uf" => "MG",
                "city" => "Igaratinga"
            ],
            [
                "uf" => "MG",
                "city" => "Iguatama"
            ],
            [
                "uf" => "MG",
                "city" => "Ijaci"
            ],
            [
                "uf" => "MG",
                "city" => "Ilicínea"
            ],
            [
                "uf" => "MG",
                "city" => "Imbé de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Inconfidentes"
            ],
            [
                "uf" => "MG",
                "city" => "Indaiabira"
            ],
            [
                "uf" => "MG",
                "city" => "Indianópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Ingaí"
            ],
            [
                "uf" => "MG",
                "city" => "Inhapim"
            ],
            [
                "uf" => "MG",
                "city" => "Inhaúma"
            ],
            [
                "uf" => "MG",
                "city" => "Inimutaba"
            ],
            [
                "uf" => "MG",
                "city" => "Ipaba"
            ],
            [
                "uf" => "MG",
                "city" => "Ipanema"
            ],
            [
                "uf" => "MG",
                "city" => "Ipatinga"
            ],
            [
                "uf" => "MG",
                "city" => "Ipiaçu"
            ],
            [
                "uf" => "MG",
                "city" => "Ipuiúna"
            ],
            [
                "uf" => "MG",
                "city" => "Iraí de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Itabira"
            ],
            [
                "uf" => "MG",
                "city" => "Itabirinha"
            ],
            [
                "uf" => "MG",
                "city" => "Itabirito"
            ],
            [
                "uf" => "MG",
                "city" => "Itacambira"
            ],
            [
                "uf" => "MG",
                "city" => "Itacarambi"
            ],
            [
                "uf" => "MG",
                "city" => "Itaguara"
            ],
            [
                "uf" => "MG",
                "city" => "Itaipé"
            ],
            [
                "uf" => "MG",
                "city" => "Itajubá"
            ],
            [
                "uf" => "MG",
                "city" => "Itamarandiba"
            ],
            [
                "uf" => "MG",
                "city" => "Itamarati de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Itambacuri"
            ],
            [
                "uf" => "MG",
                "city" => "Itambé do Mato Dentro"
            ],
            [
                "uf" => "MG",
                "city" => "Itamogi"
            ],
            [
                "uf" => "MG",
                "city" => "Itamonte"
            ],
            [
                "uf" => "MG",
                "city" => "Itanhandu"
            ],
            [
                "uf" => "MG",
                "city" => "Itanhomi"
            ],
            [
                "uf" => "MG",
                "city" => "Itaobim"
            ],
            [
                "uf" => "MG",
                "city" => "Itapagipe"
            ],
            [
                "uf" => "MG",
                "city" => "Itapecerica"
            ],
            [
                "uf" => "MG",
                "city" => "Itapeva"
            ],
            [
                "uf" => "MG",
                "city" => "Itatiaiuçu"
            ],
            [
                "uf" => "MG",
                "city" => "Itaú de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Itaúna"
            ],
            [
                "uf" => "MG",
                "city" => "Itaverava"
            ],
            [
                "uf" => "MG",
                "city" => "Itinga"
            ],
            [
                "uf" => "MG",
                "city" => "Itueta"
            ],
            [
                "uf" => "MG",
                "city" => "Ituiutaba"
            ],
            [
                "uf" => "MG",
                "city" => "Itumirim"
            ],
            [
                "uf" => "MG",
                "city" => "Iturama"
            ],
            [
                "uf" => "MG",
                "city" => "Itutinga"
            ],
            [
                "uf" => "MG",
                "city" => "Jaboticatubas"
            ],
            [
                "uf" => "MG",
                "city" => "Jacinto"
            ],
            [
                "uf" => "MG",
                "city" => "Jacuí"
            ],
            [
                "uf" => "MG",
                "city" => "Jacutinga"
            ],
            [
                "uf" => "MG",
                "city" => "Jaguaraçu"
            ],
            [
                "uf" => "MG",
                "city" => "Jaíba"
            ],
            [
                "uf" => "MG",
                "city" => "Jampruca"
            ],
            [
                "uf" => "MG",
                "city" => "Janaúba"
            ],
            [
                "uf" => "MG",
                "city" => "Januária"
            ],
            [
                "uf" => "MG",
                "city" => "Japaraíba"
            ],
            [
                "uf" => "MG",
                "city" => "Japonvar"
            ],
            [
                "uf" => "MG",
                "city" => "Jeceaba"
            ],
            [
                "uf" => "MG",
                "city" => "Jenipapo de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Jequeri"
            ],
            [
                "uf" => "MG",
                "city" => "Jequitaí"
            ],
            [
                "uf" => "MG",
                "city" => "Jequitibá"
            ],
            [
                "uf" => "MG",
                "city" => "Jequitinhonha"
            ],
            [
                "uf" => "MG",
                "city" => "Jesuânia"
            ],
            [
                "uf" => "MG",
                "city" => "Joaíma"
            ],
            [
                "uf" => "MG",
                "city" => "Joanésia"
            ],
            [
                "uf" => "MG",
                "city" => "João Monlevade"
            ],
            [
                "uf" => "MG",
                "city" => "João Pinheiro"
            ],
            [
                "uf" => "MG",
                "city" => "Joaquim Felício"
            ],
            [
                "uf" => "MG",
                "city" => "Jordânia"
            ],
            [
                "uf" => "MG",
                "city" => "José Gonçalves de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "José Raydan"
            ],
            [
                "uf" => "MG",
                "city" => "Josenópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Nova União"
            ],
            [
                "uf" => "MG",
                "city" => "Juatuba"
            ],
            [
                "uf" => "MG",
                "city" => "Juiz de Fora"
            ],
            [
                "uf" => "MG",
                "city" => "Juramento"
            ],
            [
                "uf" => "MG",
                "city" => "Juruaia"
            ],
            [
                "uf" => "MG",
                "city" => "Juvenília"
            ],
            [
                "uf" => "MG",
                "city" => "Ladainha"
            ],
            [
                "uf" => "MG",
                "city" => "Lagamar"
            ],
            [
                "uf" => "MG",
                "city" => "Lagoa da Prata"
            ],
            [
                "uf" => "MG",
                "city" => "Lagoa Dos Patos"
            ],
            [
                "uf" => "MG",
                "city" => "Lagoa Dourada"
            ],
            [
                "uf" => "MG",
                "city" => "Lagoa Formosa"
            ],
            [
                "uf" => "MG",
                "city" => "Lagoa Grande"
            ],
            [
                "uf" => "MG",
                "city" => "Lagoa Santa"
            ],
            [
                "uf" => "MG",
                "city" => "Lajinha"
            ],
            [
                "uf" => "MG",
                "city" => "Lambari"
            ],
            [
                "uf" => "MG",
                "city" => "Lamim"
            ],
            [
                "uf" => "MG",
                "city" => "Laranjal"
            ],
            [
                "uf" => "MG",
                "city" => "Lassance"
            ],
            [
                "uf" => "MG",
                "city" => "Lavras"
            ],
            [
                "uf" => "MG",
                "city" => "Leandro Ferreira"
            ],
            [
                "uf" => "MG",
                "city" => "Leme do Prado"
            ],
            [
                "uf" => "MG",
                "city" => "Leopoldina"
            ],
            [
                "uf" => "MG",
                "city" => "Liberdade"
            ],
            [
                "uf" => "MG",
                "city" => "Lima Duarte"
            ],
            [
                "uf" => "MG",
                "city" => "Limeira do Oeste"
            ],
            [
                "uf" => "MG",
                "city" => "Lontra"
            ],
            [
                "uf" => "MG",
                "city" => "Luisburgo"
            ],
            [
                "uf" => "MG",
                "city" => "Luislândia"
            ],
            [
                "uf" => "MG",
                "city" => "Luminárias"
            ],
            [
                "uf" => "MG",
                "city" => "Luz"
            ],
            [
                "uf" => "MG",
                "city" => "Machacalis"
            ],
            [
                "uf" => "MG",
                "city" => "Machado"
            ],
            [
                "uf" => "MG",
                "city" => "Madre de Deus de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Malacacheta"
            ],
            [
                "uf" => "MG",
                "city" => "Mamonas"
            ],
            [
                "uf" => "MG",
                "city" => "Manga"
            ],
            [
                "uf" => "MG",
                "city" => "Manhuaçu"
            ],
            [
                "uf" => "MG",
                "city" => "Manhumirim"
            ],
            [
                "uf" => "MG",
                "city" => "Mantena"
            ],
            [
                "uf" => "MG",
                "city" => "Maravilhas"
            ],
            [
                "uf" => "MG",
                "city" => "Mar de Espanha"
            ],
            [
                "uf" => "MG",
                "city" => "Maria da fé"
            ],
            [
                "uf" => "MG",
                "city" => "Mariana"
            ],
            [
                "uf" => "MG",
                "city" => "Marilac"
            ],
            [
                "uf" => "MG",
                "city" => "Mário Campos"
            ],
            [
                "uf" => "MG",
                "city" => "Maripá de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Marliéria"
            ],
            [
                "uf" => "MG",
                "city" => "Marmelópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Martinho Campos"
            ],
            [
                "uf" => "MG",
                "city" => "Martins Soares"
            ],
            [
                "uf" => "MG",
                "city" => "Mata Verde"
            ],
            [
                "uf" => "MG",
                "city" => "Materlândia"
            ],
            [
                "uf" => "MG",
                "city" => "Mateus Leme"
            ],
            [
                "uf" => "MG",
                "city" => "Matias Barbosa"
            ],
            [
                "uf" => "MG",
                "city" => "Matias Cardoso"
            ],
            [
                "uf" => "MG",
                "city" => "Matipó"
            ],
            [
                "uf" => "MG",
                "city" => "Mato Verde"
            ],
            [
                "uf" => "MG",
                "city" => "Matozinhos"
            ],
            [
                "uf" => "MG",
                "city" => "Matutina"
            ],
            [
                "uf" => "MG",
                "city" => "Medeiros"
            ],
            [
                "uf" => "MG",
                "city" => "Medina"
            ],
            [
                "uf" => "MG",
                "city" => "Mendes Pimentel"
            ],
            [
                "uf" => "MG",
                "city" => "Mercês"
            ],
            [
                "uf" => "MG",
                "city" => "Mesquita"
            ],
            [
                "uf" => "MG",
                "city" => "Minas Novas"
            ],
            [
                "uf" => "MG",
                "city" => "Minduri"
            ],
            [
                "uf" => "MG",
                "city" => "Mirabela"
            ],
            [
                "uf" => "MG",
                "city" => "Miradouro"
            ],
            [
                "uf" => "MG",
                "city" => "Miraí"
            ],
            [
                "uf" => "MG",
                "city" => "Miravânia"
            ],
            [
                "uf" => "MG",
                "city" => "Moeda"
            ],
            [
                "uf" => "MG",
                "city" => "Moema"
            ],
            [
                "uf" => "MG",
                "city" => "Monjolos"
            ],
            [
                "uf" => "MG",
                "city" => "Monsenhor Paulo"
            ],
            [
                "uf" => "MG",
                "city" => "Montalvânia"
            ],
            [
                "uf" => "MG",
                "city" => "Monte Alegre de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Monte Azul"
            ],
            [
                "uf" => "MG",
                "city" => "Monte Belo"
            ],
            [
                "uf" => "MG",
                "city" => "Monte Carmelo"
            ],
            [
                "uf" => "MG",
                "city" => "Monte Formoso"
            ],
            [
                "uf" => "MG",
                "city" => "Monte Santo de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Montes Claros"
            ],
            [
                "uf" => "MG",
                "city" => "Monte Sião"
            ],
            [
                "uf" => "MG",
                "city" => "Montezuma"
            ],
            [
                "uf" => "MG",
                "city" => "Morada Nova de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Morro da Garça"
            ],
            [
                "uf" => "MG",
                "city" => "Morro do Pilar"
            ],
            [
                "uf" => "MG",
                "city" => "Munhoz"
            ],
            [
                "uf" => "MG",
                "city" => "Muriaé"
            ],
            [
                "uf" => "MG",
                "city" => "Mutum"
            ],
            [
                "uf" => "MG",
                "city" => "Muzambinho"
            ],
            [
                "uf" => "MG",
                "city" => "Nacip Raydan"
            ],
            [
                "uf" => "MG",
                "city" => "Nanuque"
            ],
            [
                "uf" => "MG",
                "city" => "Naque"
            ],
            [
                "uf" => "MG",
                "city" => "Natalândia"
            ],
            [
                "uf" => "MG",
                "city" => "Natércia"
            ],
            [
                "uf" => "MG",
                "city" => "Nazareno"
            ],
            [
                "uf" => "MG",
                "city" => "Nepomuceno"
            ],
            [
                "uf" => "MG",
                "city" => "Ninheira"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Belém"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Era"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Lima"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Módica"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Ponte"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Porteirinha"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Resende"
            ],
            [
                "uf" => "MG",
                "city" => "Nova Serrana"
            ],
            [
                "uf" => "MG",
                "city" => "Novo Cruzeiro"
            ],
            [
                "uf" => "MG",
                "city" => "Novo Oriente de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Novorizonte"
            ],
            [
                "uf" => "MG",
                "city" => "Olaria"
            ],
            [
                "uf" => "MG",
                "city" => "Olhos-d´água"
            ],
            [
                "uf" => "MG",
                "city" => "Olímpio Noronha"
            ],
            [
                "uf" => "MG",
                "city" => "Oliveira"
            ],
            [
                "uf" => "MG",
                "city" => "Oliveira Fortes"
            ],
            [
                "uf" => "MG",
                "city" => "Onça de Pitangui"
            ],
            [
                "uf" => "MG",
                "city" => "Oratórios"
            ],
            [
                "uf" => "MG",
                "city" => "Orizânia"
            ],
            [
                "uf" => "MG",
                "city" => "Ouro Branco"
            ],
            [
                "uf" => "MG",
                "city" => "Ouro Fino"
            ],
            [
                "uf" => "MG",
                "city" => "Ouro Preto"
            ],
            [
                "uf" => "MG",
                "city" => "Ouro Verde de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Padre Carvalho"
            ],
            [
                "uf" => "MG",
                "city" => "Padre Paraíso"
            ],
            [
                "uf" => "MG",
                "city" => "Paineiras"
            ],
            [
                "uf" => "MG",
                "city" => "Pains"
            ],
            [
                "uf" => "MG",
                "city" => "Pai Pedro"
            ],
            [
                "uf" => "MG",
                "city" => "Paiva"
            ],
            [
                "uf" => "MG",
                "city" => "Palma"
            ],
            [
                "uf" => "MG",
                "city" => "Palmópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Papagaios"
            ],
            [
                "uf" => "MG",
                "city" => "Paracatu"
            ],
            [
                "uf" => "MG",
                "city" => "Pará de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Paraguaçu"
            ],
            [
                "uf" => "MG",
                "city" => "Paraisópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Paraopeba"
            ],
            [
                "uf" => "MG",
                "city" => "Passabém"
            ],
            [
                "uf" => "MG",
                "city" => "Passa Quatro"
            ],
            [
                "uf" => "MG",
                "city" => "Passa Tempo"
            ],
            [
                "uf" => "MG",
                "city" => "Passa-vinte"
            ],
            [
                "uf" => "MG",
                "city" => "Passos"
            ],
            [
                "uf" => "MG",
                "city" => "Patis"
            ],
            [
                "uf" => "MG",
                "city" => "Patos de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Patrocínio"
            ],
            [
                "uf" => "MG",
                "city" => "Patrocínio do Muriaé"
            ],
            [
                "uf" => "MG",
                "city" => "Paula Cândido"
            ],
            [
                "uf" => "MG",
                "city" => "Paulistas"
            ],
            [
                "uf" => "MG",
                "city" => "Pavão"
            ],
            [
                "uf" => "MG",
                "city" => "Peçanha"
            ],
            [
                "uf" => "MG",
                "city" => "Pedra Azul"
            ],
            [
                "uf" => "MG",
                "city" => "Pedra Bonita"
            ],
            [
                "uf" => "MG",
                "city" => "Pedra do Anta"
            ],
            [
                "uf" => "MG",
                "city" => "Pedra do Indaiá"
            ],
            [
                "uf" => "MG",
                "city" => "Pedra Dourada"
            ],
            [
                "uf" => "MG",
                "city" => "Pedralva"
            ],
            [
                "uf" => "MG",
                "city" => "Pedras de Maria da Cruz"
            ],
            [
                "uf" => "MG",
                "city" => "Pedrinópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Pedro Leopoldo"
            ],
            [
                "uf" => "MG",
                "city" => "Pedro Teixeira"
            ],
            [
                "uf" => "MG",
                "city" => "Pequeri"
            ],
            [
                "uf" => "MG",
                "city" => "Pequi"
            ],
            [
                "uf" => "MG",
                "city" => "Perdigão"
            ],
            [
                "uf" => "MG",
                "city" => "Perdizes"
            ],
            [
                "uf" => "MG",
                "city" => "Perdões"
            ],
            [
                "uf" => "MG",
                "city" => "Periquito"
            ],
            [
                "uf" => "MG",
                "city" => "Pescador"
            ],
            [
                "uf" => "MG",
                "city" => "Piau"
            ],
            [
                "uf" => "MG",
                "city" => "Piedade de Caratinga"
            ],
            [
                "uf" => "MG",
                "city" => "Piedade de Ponte Nova"
            ],
            [
                "uf" => "MG",
                "city" => "Piedade do Rio Grande"
            ],
            [
                "uf" => "MG",
                "city" => "Piedade Dos Gerais"
            ],
            [
                "uf" => "MG",
                "city" => "Pimenta"
            ],
            [
                "uf" => "MG",
                "city" => "Pingo-d´água"
            ],
            [
                "uf" => "MG",
                "city" => "Pintópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Piracema"
            ],
            [
                "uf" => "MG",
                "city" => "Pirajuba"
            ],
            [
                "uf" => "MG",
                "city" => "Piranga"
            ],
            [
                "uf" => "MG",
                "city" => "Piranguçu"
            ],
            [
                "uf" => "MG",
                "city" => "Piranguinho"
            ],
            [
                "uf" => "MG",
                "city" => "Pirapetinga"
            ],
            [
                "uf" => "MG",
                "city" => "Pirapora"
            ],
            [
                "uf" => "MG",
                "city" => "Piraúba"
            ],
            [
                "uf" => "MG",
                "city" => "Pitangui"
            ],
            [
                "uf" => "MG",
                "city" => "Piumhi"
            ],
            [
                "uf" => "MG",
                "city" => "Planura"
            ],
            [
                "uf" => "MG",
                "city" => "Poço Fundo"
            ],
            [
                "uf" => "MG",
                "city" => "Poços de Caldas"
            ],
            [
                "uf" => "MG",
                "city" => "Pocrane"
            ],
            [
                "uf" => "MG",
                "city" => "Pompéu"
            ],
            [
                "uf" => "MG",
                "city" => "Ponte Nova"
            ],
            [
                "uf" => "MG",
                "city" => "Ponto Chique"
            ],
            [
                "uf" => "MG",
                "city" => "Ponto Dos Volantes"
            ],
            [
                "uf" => "MG",
                "city" => "Porteirinha"
            ],
            [
                "uf" => "MG",
                "city" => "Porto Firme"
            ],
            [
                "uf" => "MG",
                "city" => "Poté"
            ],
            [
                "uf" => "MG",
                "city" => "Pouso Alegre"
            ],
            [
                "uf" => "MG",
                "city" => "Pouso Alto"
            ],
            [
                "uf" => "MG",
                "city" => "Prados"
            ],
            [
                "uf" => "MG",
                "city" => "Prata"
            ],
            [
                "uf" => "MG",
                "city" => "Pratápolis"
            ],
            [
                "uf" => "MG",
                "city" => "Pratinha"
            ],
            [
                "uf" => "MG",
                "city" => "Presidente Bernardes"
            ],
            [
                "uf" => "MG",
                "city" => "Presidente Juscelino"
            ],
            [
                "uf" => "MG",
                "city" => "Presidente Kubitschek"
            ],
            [
                "uf" => "MG",
                "city" => "Presidente Olegário"
            ],
            [
                "uf" => "MG",
                "city" => "Alto Jequitibá"
            ],
            [
                "uf" => "MG",
                "city" => "Prudente de Morais"
            ],
            [
                "uf" => "MG",
                "city" => "Quartel Geral"
            ],
            [
                "uf" => "MG",
                "city" => "Queluzito"
            ],
            [
                "uf" => "MG",
                "city" => "Raposos"
            ],
            [
                "uf" => "MG",
                "city" => "Raul Soares"
            ],
            [
                "uf" => "MG",
                "city" => "Recreio"
            ],
            [
                "uf" => "MG",
                "city" => "Reduto"
            ],
            [
                "uf" => "MG",
                "city" => "Resende Costa"
            ],
            [
                "uf" => "MG",
                "city" => "Resplendor"
            ],
            [
                "uf" => "MG",
                "city" => "Ressaquinha"
            ],
            [
                "uf" => "MG",
                "city" => "Riachinho"
            ],
            [
                "uf" => "MG",
                "city" => "Riacho Dos Machados"
            ],
            [
                "uf" => "MG",
                "city" => "Ribeirão Das Neves"
            ],
            [
                "uf" => "MG",
                "city" => "Ribeirão Vermelho"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Acima"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Casca"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Doce"
            ],
            [
                "uf" => "MG",
                "city" => "Rio do Prado"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Espera"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Manso"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Novo"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Paranaíba"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Pardo de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Piracicaba"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Pomba"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Preto"
            ],
            [
                "uf" => "MG",
                "city" => "Rio Vermelho"
            ],
            [
                "uf" => "MG",
                "city" => "Ritápolis"
            ],
            [
                "uf" => "MG",
                "city" => "Rochedo de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Rodeiro"
            ],
            [
                "uf" => "MG",
                "city" => "Romaria"
            ],
            [
                "uf" => "MG",
                "city" => "Rosário da Limeira"
            ],
            [
                "uf" => "MG",
                "city" => "Rubelita"
            ],
            [
                "uf" => "MG",
                "city" => "Rubim"
            ],
            [
                "uf" => "MG",
                "city" => "Sabará"
            ],
            [
                "uf" => "MG",
                "city" => "Sabinópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Sacramento"
            ],
            [
                "uf" => "MG",
                "city" => "Salinas"
            ],
            [
                "uf" => "MG",
                "city" => "Salto da Divisa"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Bárbara"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Bárbara do Leste"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Bárbara do Monte Verde"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Bárbara do Tugúrio"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Cruz de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Cruz de Salinas"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Cruz do Escalvado"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Efigênia de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Santa fé de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Helena de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Juliana"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Luzia"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Margarida"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Maria de Itabira"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Maria do Salto"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Maria do Suaçuí"
            ],
            [
                "uf" => "MG",
                "city" => "Santana da Vargem"
            ],
            [
                "uf" => "MG",
                "city" => "Santana de Cataguases"
            ],
            [
                "uf" => "MG",
                "city" => "Santana de Pirapama"
            ],
            [
                "uf" => "MG",
                "city" => "Santana do Deserto"
            ],
            [
                "uf" => "MG",
                "city" => "Santana do Garambéu"
            ],
            [
                "uf" => "MG",
                "city" => "Santana do Jacaré"
            ],
            [
                "uf" => "MG",
                "city" => "Santana do Manhuaçu"
            ],
            [
                "uf" => "MG",
                "city" => "Santana do Paraíso"
            ],
            [
                "uf" => "MG",
                "city" => "Santana do Riacho"
            ],
            [
                "uf" => "MG",
                "city" => "Santana Dos Montes"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Rita de Caldas"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Rita de Jacutinga"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Rita de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Rita de Ibitipoca"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Rita do Itueto"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Rita do Sapucaí"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Rosa da Serra"
            ],
            [
                "uf" => "MG",
                "city" => "Santa Vitória"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Amparo"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Aventureiro"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Grama"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Itambé"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Jacinto"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Monte"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Retiro"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Antônio do Rio Abaixo"
            ],
            [
                "uf" => "MG",
                "city" => "Santo Hipólito"
            ],
            [
                "uf" => "MG",
                "city" => "Santos Dumont"
            ],
            [
                "uf" => "MG",
                "city" => "São Bento Abade"
            ],
            [
                "uf" => "MG",
                "city" => "São Brás do Suaçuí"
            ],
            [
                "uf" => "MG",
                "city" => "São Domingos Das Dores"
            ],
            [
                "uf" => "MG",
                "city" => "São Domingos do Prata"
            ],
            [
                "uf" => "MG",
                "city" => "São Félix de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "São Francisco"
            ],
            [
                "uf" => "MG",
                "city" => "São Francisco de Paula"
            ],
            [
                "uf" => "MG",
                "city" => "São Francisco de Sales"
            ],
            [
                "uf" => "MG",
                "city" => "São Francisco do Glória"
            ],
            [
                "uf" => "MG",
                "city" => "São Geraldo"
            ],
            [
                "uf" => "MG",
                "city" => "São Geraldo da Piedade"
            ],
            [
                "uf" => "MG",
                "city" => "São Geraldo do Baixio"
            ],
            [
                "uf" => "MG",
                "city" => "São Gonçalo do Abaeté"
            ],
            [
                "uf" => "MG",
                "city" => "São Gonçalo do Pará"
            ],
            [
                "uf" => "MG",
                "city" => "São Gonçalo do Rio Abaixo"
            ],
            [
                "uf" => "MG",
                "city" => "São Gonçalo do Sapucaí"
            ],
            [
                "uf" => "MG",
                "city" => "São Gotardo"
            ],
            [
                "uf" => "MG",
                "city" => "São João Batista do Glória"
            ],
            [
                "uf" => "MG",
                "city" => "São João da Lagoa"
            ],
            [
                "uf" => "MG",
                "city" => "São João da Mata"
            ],
            [
                "uf" => "MG",
                "city" => "São João da Ponte"
            ],
            [
                "uf" => "MG",
                "city" => "São João Das Missões"
            ],
            [
                "uf" => "MG",
                "city" => "São João Del Rei"
            ],
            [
                "uf" => "MG",
                "city" => "São João do Manhuaçu"
            ],
            [
                "uf" => "MG",
                "city" => "São João do Manteninha"
            ],
            [
                "uf" => "MG",
                "city" => "São João do Oriente"
            ],
            [
                "uf" => "MG",
                "city" => "São João do Pacuí"
            ],
            [
                "uf" => "MG",
                "city" => "São João do Paraíso"
            ],
            [
                "uf" => "MG",
                "city" => "São João Evangelista"
            ],
            [
                "uf" => "MG",
                "city" => "São João Nepomuceno"
            ],
            [
                "uf" => "MG",
                "city" => "São Joaquim de Bicas"
            ],
            [
                "uf" => "MG",
                "city" => "São José da Barra"
            ],
            [
                "uf" => "MG",
                "city" => "São José da Lapa"
            ],
            [
                "uf" => "MG",
                "city" => "São José da Safira"
            ],
            [
                "uf" => "MG",
                "city" => "São José da Varginha"
            ],
            [
                "uf" => "MG",
                "city" => "São José do Alegre"
            ],
            [
                "uf" => "MG",
                "city" => "São José do Divino"
            ],
            [
                "uf" => "MG",
                "city" => "São José do Goiabal"
            ],
            [
                "uf" => "MG",
                "city" => "São José do Jacuri"
            ],
            [
                "uf" => "MG",
                "city" => "São José do Mantimento"
            ],
            [
                "uf" => "MG",
                "city" => "São Lourenço"
            ],
            [
                "uf" => "MG",
                "city" => "São Miguel do Anta"
            ],
            [
                "uf" => "MG",
                "city" => "São Pedro da União"
            ],
            [
                "uf" => "MG",
                "city" => "São Pedro Dos Ferros"
            ],
            [
                "uf" => "MG",
                "city" => "São Pedro do Suaçuí"
            ],
            [
                "uf" => "MG",
                "city" => "São Romão"
            ],
            [
                "uf" => "MG",
                "city" => "São Roque de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião da Bela Vista"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião da Vargem Alegre"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião do Anta"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião do Maranhão"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião do Oeste"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião do Paraíso"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião do Rio Preto"
            ],
            [
                "uf" => "MG",
                "city" => "São Sebastião do Rio Verde"
            ],
            [
                "uf" => "MG",
                "city" => "São Tiago"
            ],
            [
                "uf" => "MG",
                "city" => "São Tomás de Aquino"
            ],
            [
                "uf" => "MG",
                "city" => "São Thomé Das Letras"
            ],
            [
                "uf" => "MG",
                "city" => "São Vicente de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Sapucaí-mirim"
            ],
            [
                "uf" => "MG",
                "city" => "Sardoá"
            ],
            [
                "uf" => "MG",
                "city" => "Sarzedo"
            ],
            [
                "uf" => "MG",
                "city" => "Setubinha"
            ],
            [
                "uf" => "MG",
                "city" => "Sem-peixe"
            ],
            [
                "uf" => "MG",
                "city" => "Senador Amaral"
            ],
            [
                "uf" => "MG",
                "city" => "Senador Cortes"
            ],
            [
                "uf" => "MG",
                "city" => "Senador Firmino"
            ],
            [
                "uf" => "MG",
                "city" => "Senador José Bento"
            ],
            [
                "uf" => "MG",
                "city" => "Senador Modestino Gonçalves"
            ],
            [
                "uf" => "MG",
                "city" => "Senhora de Oliveira"
            ],
            [
                "uf" => "MG",
                "city" => "Senhora do Porto"
            ],
            [
                "uf" => "MG",
                "city" => "Senhora Dos Remédios"
            ],
            [
                "uf" => "MG",
                "city" => "Sericita"
            ],
            [
                "uf" => "MG",
                "city" => "Seritinga"
            ],
            [
                "uf" => "MG",
                "city" => "Serra Azul de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Serra da Saudade"
            ],
            [
                "uf" => "MG",
                "city" => "Serra Dos Aimorés"
            ],
            [
                "uf" => "MG",
                "city" => "Serra do Salitre"
            ],
            [
                "uf" => "MG",
                "city" => "Serrania"
            ],
            [
                "uf" => "MG",
                "city" => "Serranópolis de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Serranos"
            ],
            [
                "uf" => "MG",
                "city" => "Serro"
            ],
            [
                "uf" => "MG",
                "city" => "Sete Lagoas"
            ],
            [
                "uf" => "MG",
                "city" => "Silveirânia"
            ],
            [
                "uf" => "MG",
                "city" => "Silvianópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Simão Pereira"
            ],
            [
                "uf" => "MG",
                "city" => "Simonésia"
            ],
            [
                "uf" => "MG",
                "city" => "Sobrália"
            ],
            [
                "uf" => "MG",
                "city" => "Soledade de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Tabuleiro"
            ],
            [
                "uf" => "MG",
                "city" => "Taiobeiras"
            ],
            [
                "uf" => "MG",
                "city" => "Taparuba"
            ],
            [
                "uf" => "MG",
                "city" => "Tapira"
            ],
            [
                "uf" => "MG",
                "city" => "Tapiraí"
            ],
            [
                "uf" => "MG",
                "city" => "Taquaraçu de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Tarumirim"
            ],
            [
                "uf" => "MG",
                "city" => "Teixeiras"
            ],
            [
                "uf" => "MG",
                "city" => "Teófilo Otoni"
            ],
            [
                "uf" => "MG",
                "city" => "Timóteo"
            ],
            [
                "uf" => "MG",
                "city" => "Tiradentes"
            ],
            [
                "uf" => "MG",
                "city" => "Tiros"
            ],
            [
                "uf" => "MG",
                "city" => "Tocantins"
            ],
            [
                "uf" => "MG",
                "city" => "Tocos do Moji"
            ],
            [
                "uf" => "MG",
                "city" => "Toledo"
            ],
            [
                "uf" => "MG",
                "city" => "Tombos"
            ],
            [
                "uf" => "MG",
                "city" => "Três Corações"
            ],
            [
                "uf" => "MG",
                "city" => "Três Marias"
            ],
            [
                "uf" => "MG",
                "city" => "Três Pontas"
            ],
            [
                "uf" => "MG",
                "city" => "Tumiritinga"
            ],
            [
                "uf" => "MG",
                "city" => "Tupaciguara"
            ],
            [
                "uf" => "MG",
                "city" => "Turmalina"
            ],
            [
                "uf" => "MG",
                "city" => "Turvolândia"
            ],
            [
                "uf" => "MG",
                "city" => "Ubá"
            ],
            [
                "uf" => "MG",
                "city" => "Ubaí"
            ],
            [
                "uf" => "MG",
                "city" => "Ubaporanga"
            ],
            [
                "uf" => "MG",
                "city" => "Uberaba"
            ],
            [
                "uf" => "MG",
                "city" => "Uberlândia"
            ],
            [
                "uf" => "MG",
                "city" => "Umburatiba"
            ],
            [
                "uf" => "MG",
                "city" => "Unaí"
            ],
            [
                "uf" => "MG",
                "city" => "União de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Uruana de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Urucânia"
            ],
            [
                "uf" => "MG",
                "city" => "Urucuia"
            ],
            [
                "uf" => "MG",
                "city" => "Vargem Alegre"
            ],
            [
                "uf" => "MG",
                "city" => "Vargem Bonita"
            ],
            [
                "uf" => "MG",
                "city" => "Vargem Grande do Rio Pardo"
            ],
            [
                "uf" => "MG",
                "city" => "Varginha"
            ],
            [
                "uf" => "MG",
                "city" => "Varjão de Minas"
            ],
            [
                "uf" => "MG",
                "city" => "Várzea da Palma"
            ],
            [
                "uf" => "MG",
                "city" => "Varzelândia"
            ],
            [
                "uf" => "MG",
                "city" => "Vazante"
            ],
            [
                "uf" => "MG",
                "city" => "Verdelândia"
            ],
            [
                "uf" => "MG",
                "city" => "Veredinha"
            ],
            [
                "uf" => "MG",
                "city" => "Veríssimo"
            ],
            [
                "uf" => "MG",
                "city" => "Vermelho Novo"
            ],
            [
                "uf" => "MG",
                "city" => "Vespasiano"
            ],
            [
                "uf" => "MG",
                "city" => "Viçosa"
            ],
            [
                "uf" => "MG",
                "city" => "Vieiras"
            ],
            [
                "uf" => "MG",
                "city" => "Mathias Lobato"
            ],
            [
                "uf" => "MG",
                "city" => "Virgem da Lapa"
            ],
            [
                "uf" => "MG",
                "city" => "Virgínia"
            ],
            [
                "uf" => "MG",
                "city" => "Virginópolis"
            ],
            [
                "uf" => "MG",
                "city" => "Virgolândia"
            ],
            [
                "uf" => "MG",
                "city" => "Visconde do Rio Branco"
            ],
            [
                "uf" => "MG",
                "city" => "Volta Grande"
            ],
            [
                "uf" => "MG",
                "city" => "Wenceslau Braz"
            ],
            [
                "uf" => "ES",
                "city" => "Afonso Cláudio"
            ],
            [
                "uf" => "ES",
                "city" => "Águia Branca"
            ],
            [
                "uf" => "ES",
                "city" => "Água Doce do Norte"
            ],
            [
                "uf" => "ES",
                "city" => "Alegre"
            ],
            [
                "uf" => "ES",
                "city" => "Alfredo Chaves"
            ],
            [
                "uf" => "ES",
                "city" => "Alto Rio Novo"
            ],
            [
                "uf" => "ES",
                "city" => "Anchieta"
            ],
            [
                "uf" => "ES",
                "city" => "Apiacá"
            ],
            [
                "uf" => "ES",
                "city" => "Aracruz"
            ],
            [
                "uf" => "ES",
                "city" => "Atilio Vivacqua"
            ],
            [
                "uf" => "ES",
                "city" => "Baixo Guandu"
            ],
            [
                "uf" => "ES",
                "city" => "Barra de São Francisco"
            ],
            [
                "uf" => "ES",
                "city" => "Boa Esperança"
            ],
            [
                "uf" => "ES",
                "city" => "Bom Jesus do Norte"
            ],
            [
                "uf" => "ES",
                "city" => "Brejetuba"
            ],
            [
                "uf" => "ES",
                "city" => "Cachoeiro de Itapemirim"
            ],
            [
                "uf" => "ES",
                "city" => "Cariacica"
            ],
            [
                "uf" => "ES",
                "city" => "Castelo"
            ],
            [
                "uf" => "ES",
                "city" => "Colatina"
            ],
            [
                "uf" => "ES",
                "city" => "Conceição da Barra"
            ],
            [
                "uf" => "ES",
                "city" => "Conceição do Castelo"
            ],
            [
                "uf" => "ES",
                "city" => "Divino de São Lourenço"
            ],
            [
                "uf" => "ES",
                "city" => "Domingos Martins"
            ],
            [
                "uf" => "ES",
                "city" => "Dores do Rio Preto"
            ],
            [
                "uf" => "ES",
                "city" => "Ecoporanga"
            ],
            [
                "uf" => "ES",
                "city" => "Fundão"
            ],
            [
                "uf" => "ES",
                "city" => "Governador Lindenberg"
            ],
            [
                "uf" => "ES",
                "city" => "Guaçuí"
            ],
            [
                "uf" => "ES",
                "city" => "Guarapari"
            ],
            [
                "uf" => "ES",
                "city" => "Ibatiba"
            ],
            [
                "uf" => "ES",
                "city" => "Ibiraçu"
            ],
            [
                "uf" => "ES",
                "city" => "Ibitirama"
            ],
            [
                "uf" => "ES",
                "city" => "Iconha"
            ],
            [
                "uf" => "ES",
                "city" => "Irupi"
            ],
            [
                "uf" => "ES",
                "city" => "Itaguaçu"
            ],
            [
                "uf" => "ES",
                "city" => "Itapemirim"
            ],
            [
                "uf" => "ES",
                "city" => "Itarana"
            ],
            [
                "uf" => "ES",
                "city" => "Iúna"
            ],
            [
                "uf" => "ES",
                "city" => "Jaguaré"
            ],
            [
                "uf" => "ES",
                "city" => "Jerônimo Monteiro"
            ],
            [
                "uf" => "ES",
                "city" => "João Neiva"
            ],
            [
                "uf" => "ES",
                "city" => "Laranja da Terra"
            ],
            [
                "uf" => "ES",
                "city" => "Linhares"
            ],
            [
                "uf" => "ES",
                "city" => "Mantenópolis"
            ],
            [
                "uf" => "ES",
                "city" => "Marataízes"
            ],
            [
                "uf" => "ES",
                "city" => "Marechal Floriano"
            ],
            [
                "uf" => "ES",
                "city" => "Marilândia"
            ],
            [
                "uf" => "ES",
                "city" => "Mimoso do Sul"
            ],
            [
                "uf" => "ES",
                "city" => "Montanha"
            ],
            [
                "uf" => "ES",
                "city" => "Mucurici"
            ],
            [
                "uf" => "ES",
                "city" => "Muniz Freire"
            ],
            [
                "uf" => "ES",
                "city" => "Muqui"
            ],
            [
                "uf" => "ES",
                "city" => "Nova Venécia"
            ],
            [
                "uf" => "ES",
                "city" => "Pancas"
            ],
            [
                "uf" => "ES",
                "city" => "Pedro Canário"
            ],
            [
                "uf" => "ES",
                "city" => "Pinheiros"
            ],
            [
                "uf" => "ES",
                "city" => "Piúma"
            ],
            [
                "uf" => "ES",
                "city" => "Ponto Belo"
            ],
            [
                "uf" => "ES",
                "city" => "Presidente Kennedy"
            ],
            [
                "uf" => "ES",
                "city" => "Rio Bananal"
            ],
            [
                "uf" => "ES",
                "city" => "Rio Novo do Sul"
            ],
            [
                "uf" => "ES",
                "city" => "Santa Leopoldina"
            ],
            [
                "uf" => "ES",
                "city" => "Santa Maria de Jetibá"
            ],
            [
                "uf" => "ES",
                "city" => "Santa Teresa"
            ],
            [
                "uf" => "ES",
                "city" => "São Domingos do Norte"
            ],
            [
                "uf" => "ES",
                "city" => "São Gabriel da Palha"
            ],
            [
                "uf" => "ES",
                "city" => "São José do Calçado"
            ],
            [
                "uf" => "ES",
                "city" => "São Mateus"
            ],
            [
                "uf" => "ES",
                "city" => "São Roque do Canaã"
            ],
            [
                "uf" => "ES",
                "city" => "Serra"
            ],
            [
                "uf" => "ES",
                "city" => "Sooretama"
            ],
            [
                "uf" => "ES",
                "city" => "Vargem Alta"
            ],
            [
                "uf" => "ES",
                "city" => "Venda Nova do Imigrante"
            ],
            [
                "uf" => "ES",
                "city" => "Viana"
            ],
            [
                "uf" => "ES",
                "city" => "Vila Pavão"
            ],
            [
                "uf" => "ES",
                "city" => "Vila Valério"
            ],
            [
                "uf" => "ES",
                "city" => "Vila Velha"
            ],
            [
                "uf" => "ES",
                "city" => "Vitória"
            ],
            [
                "uf" => "RJ",
                "city" => "Angra Dos Reis"
            ],
            [
                "uf" => "RJ",
                "city" => "Aperibé"
            ],
            [
                "uf" => "RJ",
                "city" => "Araruama"
            ],
            [
                "uf" => "RJ",
                "city" => "Areal"
            ],
            [
                "uf" => "RJ",
                "city" => "Armação Dos Búzios"
            ],
            [
                "uf" => "RJ",
                "city" => "Arraial do Cabo"
            ],
            [
                "uf" => "RJ",
                "city" => "Barra do Piraí"
            ],
            [
                "uf" => "RJ",
                "city" => "Barra Mansa"
            ],
            [
                "uf" => "RJ",
                "city" => "Belford Roxo"
            ],
            [
                "uf" => "RJ",
                "city" => "Bom Jardim"
            ],
            [
                "uf" => "RJ",
                "city" => "Bom Jesus do Itabapoana"
            ],
            [
                "uf" => "RJ",
                "city" => "Cabo Frio"
            ],
            [
                "uf" => "RJ",
                "city" => "Cachoeiras de Macacu"
            ],
            [
                "uf" => "RJ",
                "city" => "Cambuci"
            ],
            [
                "uf" => "RJ",
                "city" => "Carapebus"
            ],
            [
                "uf" => "RJ",
                "city" => "Comendador Levy Gasparian"
            ],
            [
                "uf" => "RJ",
                "city" => "Campos Dos Goytacazes"
            ],
            [
                "uf" => "RJ",
                "city" => "Cantagalo"
            ],
            [
                "uf" => "RJ",
                "city" => "Cardoso Moreira"
            ],
            [
                "uf" => "RJ",
                "city" => "Carmo"
            ],
            [
                "uf" => "RJ",
                "city" => "Casimiro de Abreu"
            ],
            [
                "uf" => "RJ",
                "city" => "Conceição de Macabu"
            ],
            [
                "uf" => "RJ",
                "city" => "Cordeiro"
            ],
            [
                "uf" => "RJ",
                "city" => "Duas Barras"
            ],
            [
                "uf" => "RJ",
                "city" => "Duque de Caxias"
            ],
            [
                "uf" => "RJ",
                "city" => "Engenheiro Paulo de Frontin"
            ],
            [
                "uf" => "RJ",
                "city" => "Guapimirim"
            ],
            [
                "uf" => "RJ",
                "city" => "Iguaba Grande"
            ],
            [
                "uf" => "RJ",
                "city" => "Itaboraí"
            ],
            [
                "uf" => "RJ",
                "city" => "Itaguaí"
            ],
            [
                "uf" => "RJ",
                "city" => "Italva"
            ],
            [
                "uf" => "RJ",
                "city" => "Itaocara"
            ],
            [
                "uf" => "RJ",
                "city" => "Itaperuna"
            ],
            [
                "uf" => "RJ",
                "city" => "Itatiaia"
            ],
            [
                "uf" => "RJ",
                "city" => "Japeri"
            ],
            [
                "uf" => "RJ",
                "city" => "Laje do Muriaé"
            ],
            [
                "uf" => "RJ",
                "city" => "Macaé"
            ],
            [
                "uf" => "RJ",
                "city" => "Macuco"
            ],
            [
                "uf" => "RJ",
                "city" => "Magé"
            ],
            [
                "uf" => "RJ",
                "city" => "Mangaratiba"
            ],
            [
                "uf" => "RJ",
                "city" => "Maricá"
            ],
            [
                "uf" => "RJ",
                "city" => "Mendes"
            ],
            [
                "uf" => "RJ",
                "city" => "Mesquita"
            ],
            [
                "uf" => "RJ",
                "city" => "Miguel Pereira"
            ],
            [
                "uf" => "RJ",
                "city" => "Miracema"
            ],
            [
                "uf" => "RJ",
                "city" => "Natividade"
            ],
            [
                "uf" => "RJ",
                "city" => "Nilópolis"
            ],
            [
                "uf" => "RJ",
                "city" => "Niterói"
            ],
            [
                "uf" => "RJ",
                "city" => "Nova Friburgo"
            ],
            [
                "uf" => "RJ",
                "city" => "Nova Iguaçu"
            ],
            [
                "uf" => "RJ",
                "city" => "Paracambi"
            ],
            [
                "uf" => "RJ",
                "city" => "Paraíba do Sul"
            ],
            [
                "uf" => "RJ",
                "city" => "Parati"
            ],
            [
                "uf" => "RJ",
                "city" => "Paty do Alferes"
            ],
            [
                "uf" => "RJ",
                "city" => "Petrópolis"
            ],
            [
                "uf" => "RJ",
                "city" => "Pinheiral"
            ],
            [
                "uf" => "RJ",
                "city" => "Piraí"
            ],
            [
                "uf" => "RJ",
                "city" => "Porciúncula"
            ],
            [
                "uf" => "RJ",
                "city" => "Porto Real"
            ],
            [
                "uf" => "RJ",
                "city" => "Quatis"
            ],
            [
                "uf" => "RJ",
                "city" => "Queimados"
            ],
            [
                "uf" => "RJ",
                "city" => "Quissamã"
            ],
            [
                "uf" => "RJ",
                "city" => "Resende"
            ],
            [
                "uf" => "RJ",
                "city" => "Rio Bonito"
            ],
            [
                "uf" => "RJ",
                "city" => "Rio Claro"
            ],
            [
                "uf" => "RJ",
                "city" => "Rio Das Flores"
            ],
            [
                "uf" => "RJ",
                "city" => "Rio Das Ostras"
            ],
            [
                "uf" => "RJ",
                "city" => "Rio de Janeiro"
            ],
            [
                "uf" => "RJ",
                "city" => "Santa Maria Madalena"
            ],
            [
                "uf" => "RJ",
                "city" => "Santo Antônio de Pádua"
            ],
            [
                "uf" => "RJ",
                "city" => "São Francisco de Itabapoana"
            ],
            [
                "uf" => "RJ",
                "city" => "São Fidélis"
            ],
            [
                "uf" => "RJ",
                "city" => "São Gonçalo"
            ],
            [
                "uf" => "RJ",
                "city" => "São João da Barra"
            ],
            [
                "uf" => "RJ",
                "city" => "São João de Meriti"
            ],
            [
                "uf" => "RJ",
                "city" => "São José de Ubá"
            ],
            [
                "uf" => "RJ",
                "city" => "São José do Vale do Rio Preto"
            ],
            [
                "uf" => "RJ",
                "city" => "São Pedro da Aldeia"
            ],
            [
                "uf" => "RJ",
                "city" => "São Sebastião do Alto"
            ],
            [
                "uf" => "RJ",
                "city" => "Sapucaia"
            ],
            [
                "uf" => "RJ",
                "city" => "Saquarema"
            ],
            [
                "uf" => "RJ",
                "city" => "Seropédica"
            ],
            [
                "uf" => "RJ",
                "city" => "Silva Jardim"
            ],
            [
                "uf" => "RJ",
                "city" => "Sumidouro"
            ],
            [
                "uf" => "RJ",
                "city" => "Tanguá"
            ],
            [
                "uf" => "RJ",
                "city" => "Teresópolis"
            ],
            [
                "uf" => "RJ",
                "city" => "Trajano de Morais"
            ],
            [
                "uf" => "RJ",
                "city" => "Três Rios"
            ],
            [
                "uf" => "RJ",
                "city" => "Valença"
            ],
            [
                "uf" => "RJ",
                "city" => "Varre-sai"
            ],
            [
                "uf" => "RJ",
                "city" => "Vassouras"
            ],
            [
                "uf" => "RJ",
                "city" => "Volta Redonda"
            ],
            [
                "uf" => "SP",
                "city" => "Adamantina"
            ],
            [
                "uf" => "SP",
                "city" => "Adolfo"
            ],
            [
                "uf" => "SP",
                "city" => "Aguaí"
            ],
            [
                "uf" => "SP",
                "city" => "Águas da Prata"
            ],
            [
                "uf" => "SP",
                "city" => "Águas de Lindóia"
            ],
            [
                "uf" => "SP",
                "city" => "Águas de Santa Bárbara"
            ],
            [
                "uf" => "SP",
                "city" => "Águas de São Pedro"
            ],
            [
                "uf" => "SP",
                "city" => "Agudos"
            ],
            [
                "uf" => "SP",
                "city" => "Alambari"
            ],
            [
                "uf" => "SP",
                "city" => "Alfredo Marcondes"
            ],
            [
                "uf" => "SP",
                "city" => "Altair"
            ],
            [
                "uf" => "SP",
                "city" => "Altinópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Alto Alegre"
            ],
            [
                "uf" => "SP",
                "city" => "Alumínio"
            ],
            [
                "uf" => "SP",
                "city" => "Álvares Florence"
            ],
            [
                "uf" => "SP",
                "city" => "Álvares Machado"
            ],
            [
                "uf" => "SP",
                "city" => "Álvaro de Carvalho"
            ],
            [
                "uf" => "SP",
                "city" => "Alvinlândia"
            ],
            [
                "uf" => "SP",
                "city" => "Americana"
            ],
            [
                "uf" => "SP",
                "city" => "Américo Brasiliense"
            ],
            [
                "uf" => "SP",
                "city" => "Américo de Campos"
            ],
            [
                "uf" => "SP",
                "city" => "Amparo"
            ],
            [
                "uf" => "SP",
                "city" => "Analândia"
            ],
            [
                "uf" => "SP",
                "city" => "Andradina"
            ],
            [
                "uf" => "SP",
                "city" => "Angatuba"
            ],
            [
                "uf" => "SP",
                "city" => "Anhembi"
            ],
            [
                "uf" => "SP",
                "city" => "Anhumas"
            ],
            [
                "uf" => "SP",
                "city" => "Aparecida"
            ],
            [
                "uf" => "SP",
                "city" => "Aparecida D´oeste"
            ],
            [
                "uf" => "SP",
                "city" => "Apiaí"
            ],
            [
                "uf" => "SP",
                "city" => "Araçariguama"
            ],
            [
                "uf" => "SP",
                "city" => "Araçatuba"
            ],
            [
                "uf" => "SP",
                "city" => "Araçoiaba da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "Aramina"
            ],
            [
                "uf" => "SP",
                "city" => "Arandu"
            ],
            [
                "uf" => "SP",
                "city" => "Arapeí"
            ],
            [
                "uf" => "SP",
                "city" => "Araraquara"
            ],
            [
                "uf" => "SP",
                "city" => "Araras"
            ],
            [
                "uf" => "SP",
                "city" => "Arco-íris"
            ],
            [
                "uf" => "SP",
                "city" => "Arealva"
            ],
            [
                "uf" => "SP",
                "city" => "Areias"
            ],
            [
                "uf" => "SP",
                "city" => "Areiópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Ariranha"
            ],
            [
                "uf" => "SP",
                "city" => "Artur Nogueira"
            ],
            [
                "uf" => "SP",
                "city" => "Arujá"
            ],
            [
                "uf" => "SP",
                "city" => "Aspásia"
            ],
            [
                "uf" => "SP",
                "city" => "Assis"
            ],
            [
                "uf" => "SP",
                "city" => "Atibaia"
            ],
            [
                "uf" => "SP",
                "city" => "Auriflama"
            ],
            [
                "uf" => "SP",
                "city" => "Avaí"
            ],
            [
                "uf" => "SP",
                "city" => "Avanhandava"
            ],
            [
                "uf" => "SP",
                "city" => "Avaré"
            ],
            [
                "uf" => "SP",
                "city" => "Bady Bassitt"
            ],
            [
                "uf" => "SP",
                "city" => "Balbinos"
            ],
            [
                "uf" => "SP",
                "city" => "Bálsamo"
            ],
            [
                "uf" => "SP",
                "city" => "Bananal"
            ],
            [
                "uf" => "SP",
                "city" => "Barão de Antonina"
            ],
            [
                "uf" => "SP",
                "city" => "Barbosa"
            ],
            [
                "uf" => "SP",
                "city" => "Bariri"
            ],
            [
                "uf" => "SP",
                "city" => "Barra Bonita"
            ],
            [
                "uf" => "SP",
                "city" => "Barra do Chapéu"
            ],
            [
                "uf" => "SP",
                "city" => "Barra do Turvo"
            ],
            [
                "uf" => "SP",
                "city" => "Barretos"
            ],
            [
                "uf" => "SP",
                "city" => "Barrinha"
            ],
            [
                "uf" => "SP",
                "city" => "Barueri"
            ],
            [
                "uf" => "SP",
                "city" => "Bastos"
            ],
            [
                "uf" => "SP",
                "city" => "Batatais"
            ],
            [
                "uf" => "SP",
                "city" => "Bauru"
            ],
            [
                "uf" => "SP",
                "city" => "Bebedouro"
            ],
            [
                "uf" => "SP",
                "city" => "Bento de Abreu"
            ],
            [
                "uf" => "SP",
                "city" => "Bernardino de Campos"
            ],
            [
                "uf" => "SP",
                "city" => "Bertioga"
            ],
            [
                "uf" => "SP",
                "city" => "Bilac"
            ],
            [
                "uf" => "SP",
                "city" => "Birigui"
            ],
            [
                "uf" => "SP",
                "city" => "Biritiba-mirim"
            ],
            [
                "uf" => "SP",
                "city" => "Boa Esperança do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Bocaina"
            ],
            [
                "uf" => "SP",
                "city" => "Bofete"
            ],
            [
                "uf" => "SP",
                "city" => "Boituva"
            ],
            [
                "uf" => "SP",
                "city" => "Bom Jesus Dos Perdões"
            ],
            [
                "uf" => "SP",
                "city" => "Bom Sucesso de Itararé"
            ],
            [
                "uf" => "SP",
                "city" => "Borá"
            ],
            [
                "uf" => "SP",
                "city" => "Boracéia"
            ],
            [
                "uf" => "SP",
                "city" => "Borborema"
            ],
            [
                "uf" => "SP",
                "city" => "Borebi"
            ],
            [
                "uf" => "SP",
                "city" => "Botucatu"
            ],
            [
                "uf" => "SP",
                "city" => "Bragança Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Braúna"
            ],
            [
                "uf" => "SP",
                "city" => "Brejo Alegre"
            ],
            [
                "uf" => "SP",
                "city" => "Brodowski"
            ],
            [
                "uf" => "SP",
                "city" => "Brotas"
            ],
            [
                "uf" => "SP",
                "city" => "Buri"
            ],
            [
                "uf" => "SP",
                "city" => "Buritama"
            ],
            [
                "uf" => "SP",
                "city" => "Buritizal"
            ],
            [
                "uf" => "SP",
                "city" => "Cabrália Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Cabreúva"
            ],
            [
                "uf" => "SP",
                "city" => "Caçapava"
            ],
            [
                "uf" => "SP",
                "city" => "Cachoeira Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Caconde"
            ],
            [
                "uf" => "SP",
                "city" => "Cafelândia"
            ],
            [
                "uf" => "SP",
                "city" => "Caiabu"
            ],
            [
                "uf" => "SP",
                "city" => "Caieiras"
            ],
            [
                "uf" => "SP",
                "city" => "Caiuá"
            ],
            [
                "uf" => "SP",
                "city" => "Cajamar"
            ],
            [
                "uf" => "SP",
                "city" => "Cajati"
            ],
            [
                "uf" => "SP",
                "city" => "Cajobi"
            ],
            [
                "uf" => "SP",
                "city" => "Cajuru"
            ],
            [
                "uf" => "SP",
                "city" => "Campina do Monte Alegre"
            ],
            [
                "uf" => "SP",
                "city" => "Campinas"
            ],
            [
                "uf" => "SP",
                "city" => "Campo Limpo Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Campos do Jordão"
            ],
            [
                "uf" => "SP",
                "city" => "Campos Novos Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Cananéia"
            ],
            [
                "uf" => "SP",
                "city" => "Canas"
            ],
            [
                "uf" => "SP",
                "city" => "Cândido Mota"
            ],
            [
                "uf" => "SP",
                "city" => "Cândido Rodrigues"
            ],
            [
                "uf" => "SP",
                "city" => "Canitar"
            ],
            [
                "uf" => "SP",
                "city" => "Capão Bonito"
            ],
            [
                "uf" => "SP",
                "city" => "Capela do Alto"
            ],
            [
                "uf" => "SP",
                "city" => "Capivari"
            ],
            [
                "uf" => "SP",
                "city" => "Caraguatatuba"
            ],
            [
                "uf" => "SP",
                "city" => "Carapicuíba"
            ],
            [
                "uf" => "SP",
                "city" => "Cardoso"
            ],
            [
                "uf" => "SP",
                "city" => "Casa Branca"
            ],
            [
                "uf" => "SP",
                "city" => "Cássia Dos Coqueiros"
            ],
            [
                "uf" => "SP",
                "city" => "Castilho"
            ],
            [
                "uf" => "SP",
                "city" => "Catanduva"
            ],
            [
                "uf" => "SP",
                "city" => "Catiguá"
            ],
            [
                "uf" => "SP",
                "city" => "Cedral"
            ],
            [
                "uf" => "SP",
                "city" => "Cerqueira César"
            ],
            [
                "uf" => "SP",
                "city" => "Cerquilho"
            ],
            [
                "uf" => "SP",
                "city" => "Cesário Lange"
            ],
            [
                "uf" => "SP",
                "city" => "Charqueada"
            ],
            [
                "uf" => "SP",
                "city" => "Clementina"
            ],
            [
                "uf" => "SP",
                "city" => "Colina"
            ],
            [
                "uf" => "SP",
                "city" => "Colômbia"
            ],
            [
                "uf" => "SP",
                "city" => "Conchal"
            ],
            [
                "uf" => "SP",
                "city" => "Conchas"
            ],
            [
                "uf" => "SP",
                "city" => "Cordeirópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Coroados"
            ],
            [
                "uf" => "SP",
                "city" => "Coronel Macedo"
            ],
            [
                "uf" => "SP",
                "city" => "Corumbataí"
            ],
            [
                "uf" => "SP",
                "city" => "Cosmópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Cosmorama"
            ],
            [
                "uf" => "SP",
                "city" => "Cotia"
            ],
            [
                "uf" => "SP",
                "city" => "Cravinhos"
            ],
            [
                "uf" => "SP",
                "city" => "Cristais Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Cruzália"
            ],
            [
                "uf" => "SP",
                "city" => "Cruzeiro"
            ],
            [
                "uf" => "SP",
                "city" => "Cubatão"
            ],
            [
                "uf" => "SP",
                "city" => "Cunha"
            ],
            [
                "uf" => "SP",
                "city" => "Descalvado"
            ],
            [
                "uf" => "SP",
                "city" => "Diadema"
            ],
            [
                "uf" => "SP",
                "city" => "Dirce Reis"
            ],
            [
                "uf" => "SP",
                "city" => "Divinolândia"
            ],
            [
                "uf" => "SP",
                "city" => "Dobrada"
            ],
            [
                "uf" => "SP",
                "city" => "Dois Córregos"
            ],
            [
                "uf" => "SP",
                "city" => "Dolcinópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Dourado"
            ],
            [
                "uf" => "SP",
                "city" => "Dracena"
            ],
            [
                "uf" => "SP",
                "city" => "Duartina"
            ],
            [
                "uf" => "SP",
                "city" => "Dumont"
            ],
            [
                "uf" => "SP",
                "city" => "Echaporã"
            ],
            [
                "uf" => "SP",
                "city" => "Eldorado"
            ],
            [
                "uf" => "SP",
                "city" => "Elias Fausto"
            ],
            [
                "uf" => "SP",
                "city" => "Elisiário"
            ],
            [
                "uf" => "SP",
                "city" => "Embaúba"
            ],
            [
                "uf" => "SP",
                "city" => "Embu"
            ],
            [
                "uf" => "SP",
                "city" => "Embu-guaçu"
            ],
            [
                "uf" => "SP",
                "city" => "Emilianópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Engenheiro Coelho"
            ],
            [
                "uf" => "SP",
                "city" => "Espírito Santo do Pinhal"
            ],
            [
                "uf" => "SP",
                "city" => "Espírito Santo do Turvo"
            ],
            [
                "uf" => "SP",
                "city" => "Estrela D´oeste"
            ],
            [
                "uf" => "SP",
                "city" => "Estrela do Norte"
            ],
            [
                "uf" => "SP",
                "city" => "Euclides da Cunha Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Fartura"
            ],
            [
                "uf" => "SP",
                "city" => "Fernandópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Fernando Prestes"
            ],
            [
                "uf" => "SP",
                "city" => "Fernão"
            ],
            [
                "uf" => "SP",
                "city" => "Ferraz de Vasconcelos"
            ],
            [
                "uf" => "SP",
                "city" => "Flora Rica"
            ],
            [
                "uf" => "SP",
                "city" => "Floreal"
            ],
            [
                "uf" => "SP",
                "city" => "Flórida Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Florínia"
            ],
            [
                "uf" => "SP",
                "city" => "Franca"
            ],
            [
                "uf" => "SP",
                "city" => "Francisco Morato"
            ],
            [
                "uf" => "SP",
                "city" => "Franco da Rocha"
            ],
            [
                "uf" => "SP",
                "city" => "Gabriel Monteiro"
            ],
            [
                "uf" => "SP",
                "city" => "Gália"
            ],
            [
                "uf" => "SP",
                "city" => "Garça"
            ],
            [
                "uf" => "SP",
                "city" => "Gastão Vidigal"
            ],
            [
                "uf" => "SP",
                "city" => "Gavião Peixoto"
            ],
            [
                "uf" => "SP",
                "city" => "General Salgado"
            ],
            [
                "uf" => "SP",
                "city" => "Getulina"
            ],
            [
                "uf" => "SP",
                "city" => "Glicério"
            ],
            [
                "uf" => "SP",
                "city" => "Guaiçara"
            ],
            [
                "uf" => "SP",
                "city" => "Guaimbê"
            ],
            [
                "uf" => "SP",
                "city" => "Guaíra"
            ],
            [
                "uf" => "SP",
                "city" => "Guapiaçu"
            ],
            [
                "uf" => "SP",
                "city" => "Guapiara"
            ],
            [
                "uf" => "SP",
                "city" => "Guará"
            ],
            [
                "uf" => "SP",
                "city" => "Guaraçaí"
            ],
            [
                "uf" => "SP",
                "city" => "Guaraci"
            ],
            [
                "uf" => "SP",
                "city" => "Guarani D´oeste"
            ],
            [
                "uf" => "SP",
                "city" => "Guarantã"
            ],
            [
                "uf" => "SP",
                "city" => "Guararapes"
            ],
            [
                "uf" => "SP",
                "city" => "Guararema"
            ],
            [
                "uf" => "SP",
                "city" => "Guaratinguetá"
            ],
            [
                "uf" => "SP",
                "city" => "Guareí"
            ],
            [
                "uf" => "SP",
                "city" => "Guariba"
            ],
            [
                "uf" => "SP",
                "city" => "Guarujá"
            ],
            [
                "uf" => "SP",
                "city" => "Guarulhos"
            ],
            [
                "uf" => "SP",
                "city" => "Guatapará"
            ],
            [
                "uf" => "SP",
                "city" => "Guzolândia"
            ],
            [
                "uf" => "SP",
                "city" => "Herculândia"
            ],
            [
                "uf" => "SP",
                "city" => "Holambra"
            ],
            [
                "uf" => "SP",
                "city" => "Hortolândia"
            ],
            [
                "uf" => "SP",
                "city" => "Iacanga"
            ],
            [
                "uf" => "SP",
                "city" => "Iacri"
            ],
            [
                "uf" => "SP",
                "city" => "Iaras"
            ],
            [
                "uf" => "SP",
                "city" => "Ibaté"
            ],
            [
                "uf" => "SP",
                "city" => "Ibirá"
            ],
            [
                "uf" => "SP",
                "city" => "Ibirarema"
            ],
            [
                "uf" => "SP",
                "city" => "Ibitinga"
            ],
            [
                "uf" => "SP",
                "city" => "Ibiúna"
            ],
            [
                "uf" => "SP",
                "city" => "Icém"
            ],
            [
                "uf" => "SP",
                "city" => "Iepê"
            ],
            [
                "uf" => "SP",
                "city" => "Igaraçu do Tietê"
            ],
            [
                "uf" => "SP",
                "city" => "Igarapava"
            ],
            [
                "uf" => "SP",
                "city" => "Igaratá"
            ],
            [
                "uf" => "SP",
                "city" => "Iguape"
            ],
            [
                "uf" => "SP",
                "city" => "Ilhabela"
            ],
            [
                "uf" => "SP",
                "city" => "Ilha Comprida"
            ],
            [
                "uf" => "SP",
                "city" => "Ilha Solteira"
            ],
            [
                "uf" => "SP",
                "city" => "Indaiatuba"
            ],
            [
                "uf" => "SP",
                "city" => "Indiana"
            ],
            [
                "uf" => "SP",
                "city" => "Indiaporã"
            ],
            [
                "uf" => "SP",
                "city" => "Inúbia Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Ipaussu"
            ],
            [
                "uf" => "SP",
                "city" => "Iperó"
            ],
            [
                "uf" => "SP",
                "city" => "Ipeúna"
            ],
            [
                "uf" => "SP",
                "city" => "Ipiguá"
            ],
            [
                "uf" => "SP",
                "city" => "Iporanga"
            ],
            [
                "uf" => "SP",
                "city" => "Ipuã"
            ],
            [
                "uf" => "SP",
                "city" => "Iracemápolis"
            ],
            [
                "uf" => "SP",
                "city" => "Irapuã"
            ],
            [
                "uf" => "SP",
                "city" => "Irapuru"
            ],
            [
                "uf" => "SP",
                "city" => "Itaberá"
            ],
            [
                "uf" => "SP",
                "city" => "Itaí"
            ],
            [
                "uf" => "SP",
                "city" => "Itajobi"
            ],
            [
                "uf" => "SP",
                "city" => "Itaju"
            ],
            [
                "uf" => "SP",
                "city" => "Itanhaém"
            ],
            [
                "uf" => "SP",
                "city" => "Itaóca"
            ],
            [
                "uf" => "SP",
                "city" => "Itapecerica da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "Itapetininga"
            ],
            [
                "uf" => "SP",
                "city" => "Itapeva"
            ],
            [
                "uf" => "SP",
                "city" => "Itapevi"
            ],
            [
                "uf" => "SP",
                "city" => "Itapira"
            ],
            [
                "uf" => "SP",
                "city" => "Itapirapuã Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Itápolis"
            ],
            [
                "uf" => "SP",
                "city" => "Itaporanga"
            ],
            [
                "uf" => "SP",
                "city" => "Itapuí"
            ],
            [
                "uf" => "SP",
                "city" => "Itapura"
            ],
            [
                "uf" => "SP",
                "city" => "Itaquaquecetuba"
            ],
            [
                "uf" => "SP",
                "city" => "Itararé"
            ],
            [
                "uf" => "SP",
                "city" => "Itariri"
            ],
            [
                "uf" => "SP",
                "city" => "Itatiba"
            ],
            [
                "uf" => "SP",
                "city" => "Itatinga"
            ],
            [
                "uf" => "SP",
                "city" => "Itirapina"
            ],
            [
                "uf" => "SP",
                "city" => "Itirapuã"
            ],
            [
                "uf" => "SP",
                "city" => "Itobi"
            ],
            [
                "uf" => "SP",
                "city" => "Itu"
            ],
            [
                "uf" => "SP",
                "city" => "Itupeva"
            ],
            [
                "uf" => "SP",
                "city" => "Ituverava"
            ],
            [
                "uf" => "SP",
                "city" => "Jaborandi"
            ],
            [
                "uf" => "SP",
                "city" => "Jaboticabal"
            ],
            [
                "uf" => "SP",
                "city" => "Jacareí"
            ],
            [
                "uf" => "SP",
                "city" => "Jaci"
            ],
            [
                "uf" => "SP",
                "city" => "Jacupiranga"
            ],
            [
                "uf" => "SP",
                "city" => "Jaguariúna"
            ],
            [
                "uf" => "SP",
                "city" => "Jales"
            ],
            [
                "uf" => "SP",
                "city" => "Jambeiro"
            ],
            [
                "uf" => "SP",
                "city" => "Jandira"
            ],
            [
                "uf" => "SP",
                "city" => "Jardinópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Jarinu"
            ],
            [
                "uf" => "SP",
                "city" => "Jaú"
            ],
            [
                "uf" => "SP",
                "city" => "Jeriquara"
            ],
            [
                "uf" => "SP",
                "city" => "Joanópolis"
            ],
            [
                "uf" => "SP",
                "city" => "João Ramalho"
            ],
            [
                "uf" => "SP",
                "city" => "José Bonifácio"
            ],
            [
                "uf" => "SP",
                "city" => "Júlio Mesquita"
            ],
            [
                "uf" => "SP",
                "city" => "Jumirim"
            ],
            [
                "uf" => "SP",
                "city" => "Jundiaí"
            ],
            [
                "uf" => "SP",
                "city" => "Junqueirópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Juquiá"
            ],
            [
                "uf" => "SP",
                "city" => "Juquitiba"
            ],
            [
                "uf" => "SP",
                "city" => "Lagoinha"
            ],
            [
                "uf" => "SP",
                "city" => "Laranjal Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Lavínia"
            ],
            [
                "uf" => "SP",
                "city" => "Lavrinhas"
            ],
            [
                "uf" => "SP",
                "city" => "Leme"
            ],
            [
                "uf" => "SP",
                "city" => "Lençóis Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Limeira"
            ],
            [
                "uf" => "SP",
                "city" => "Lindóia"
            ],
            [
                "uf" => "SP",
                "city" => "Lins"
            ],
            [
                "uf" => "SP",
                "city" => "Lorena"
            ],
            [
                "uf" => "SP",
                "city" => "Lourdes"
            ],
            [
                "uf" => "SP",
                "city" => "Louveira"
            ],
            [
                "uf" => "SP",
                "city" => "Lucélia"
            ],
            [
                "uf" => "SP",
                "city" => "Lucianópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Luís Antônio"
            ],
            [
                "uf" => "SP",
                "city" => "Luiziânia"
            ],
            [
                "uf" => "SP",
                "city" => "Lupércio"
            ],
            [
                "uf" => "SP",
                "city" => "Lutécia"
            ],
            [
                "uf" => "SP",
                "city" => "Macatuba"
            ],
            [
                "uf" => "SP",
                "city" => "Macaubal"
            ],
            [
                "uf" => "SP",
                "city" => "Macedônia"
            ],
            [
                "uf" => "SP",
                "city" => "Magda"
            ],
            [
                "uf" => "SP",
                "city" => "Mairinque"
            ],
            [
                "uf" => "SP",
                "city" => "Mairiporã"
            ],
            [
                "uf" => "SP",
                "city" => "Manduri"
            ],
            [
                "uf" => "SP",
                "city" => "Marabá Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Maracaí"
            ],
            [
                "uf" => "SP",
                "city" => "Marapoama"
            ],
            [
                "uf" => "SP",
                "city" => "Mariápolis"
            ],
            [
                "uf" => "SP",
                "city" => "Marília"
            ],
            [
                "uf" => "SP",
                "city" => "Marinópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Martinópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Matão"
            ],
            [
                "uf" => "SP",
                "city" => "Mauá"
            ],
            [
                "uf" => "SP",
                "city" => "Mendonça"
            ],
            [
                "uf" => "SP",
                "city" => "Meridiano"
            ],
            [
                "uf" => "SP",
                "city" => "Mesópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Miguelópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Mineiros do Tietê"
            ],
            [
                "uf" => "SP",
                "city" => "Miracatu"
            ],
            [
                "uf" => "SP",
                "city" => "Mira Estrela"
            ],
            [
                "uf" => "SP",
                "city" => "Mirandópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Mirante do Paranapanema"
            ],
            [
                "uf" => "SP",
                "city" => "Mirassol"
            ],
            [
                "uf" => "SP",
                "city" => "Mirassolândia"
            ],
            [
                "uf" => "SP",
                "city" => "Mococa"
            ],
            [
                "uf" => "SP",
                "city" => "Moji Das Cruzes"
            ],
            [
                "uf" => "SP",
                "city" => "Mogi Guaçu"
            ],
            [
                "uf" => "SP",
                "city" => "Moji-mirim"
            ],
            [
                "uf" => "SP",
                "city" => "Mombuca"
            ],
            [
                "uf" => "SP",
                "city" => "Monções"
            ],
            [
                "uf" => "SP",
                "city" => "Mongaguá"
            ],
            [
                "uf" => "SP",
                "city" => "Monte Alegre do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Monte Alto"
            ],
            [
                "uf" => "SP",
                "city" => "Monte Aprazível"
            ],
            [
                "uf" => "SP",
                "city" => "Monte Azul Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Monte Castelo"
            ],
            [
                "uf" => "SP",
                "city" => "Monteiro Lobato"
            ],
            [
                "uf" => "SP",
                "city" => "Monte Mor"
            ],
            [
                "uf" => "SP",
                "city" => "Morro Agudo"
            ],
            [
                "uf" => "SP",
                "city" => "Morungaba"
            ],
            [
                "uf" => "SP",
                "city" => "Motuca"
            ],
            [
                "uf" => "SP",
                "city" => "Murutinga do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Nantes"
            ],
            [
                "uf" => "SP",
                "city" => "Narandiba"
            ],
            [
                "uf" => "SP",
                "city" => "Natividade da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "Nazaré Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Neves Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Nhandeara"
            ],
            [
                "uf" => "SP",
                "city" => "Nipoã"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Aliança"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Campina"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Canaã Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Castilho"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Europa"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Granada"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Guataporanga"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Independência"
            ],
            [
                "uf" => "SP",
                "city" => "Novais"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Luzitânia"
            ],
            [
                "uf" => "SP",
                "city" => "Nova Odessa"
            ],
            [
                "uf" => "SP",
                "city" => "Novo Horizonte"
            ],
            [
                "uf" => "SP",
                "city" => "Nuporanga"
            ],
            [
                "uf" => "SP",
                "city" => "Ocauçu"
            ],
            [
                "uf" => "SP",
                "city" => "Óleo"
            ],
            [
                "uf" => "SP",
                "city" => "Olímpia"
            ],
            [
                "uf" => "SP",
                "city" => "Onda Verde"
            ],
            [
                "uf" => "SP",
                "city" => "Oriente"
            ],
            [
                "uf" => "SP",
                "city" => "Orindiúva"
            ],
            [
                "uf" => "SP",
                "city" => "Orlândia"
            ],
            [
                "uf" => "SP",
                "city" => "Osasco"
            ],
            [
                "uf" => "SP",
                "city" => "Oscar Bressane"
            ],
            [
                "uf" => "SP",
                "city" => "Osvaldo Cruz"
            ],
            [
                "uf" => "SP",
                "city" => "Ourinhos"
            ],
            [
                "uf" => "SP",
                "city" => "Ouroeste"
            ],
            [
                "uf" => "SP",
                "city" => "Ouro Verde"
            ],
            [
                "uf" => "SP",
                "city" => "Pacaembu"
            ],
            [
                "uf" => "SP",
                "city" => "Palestina"
            ],
            [
                "uf" => "SP",
                "city" => "Palmares Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Palmeira D´oeste"
            ],
            [
                "uf" => "SP",
                "city" => "Palmital"
            ],
            [
                "uf" => "SP",
                "city" => "Panorama"
            ],
            [
                "uf" => "SP",
                "city" => "Paraguaçu Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Paraibuna"
            ],
            [
                "uf" => "SP",
                "city" => "Paraíso"
            ],
            [
                "uf" => "SP",
                "city" => "Paranapanema"
            ],
            [
                "uf" => "SP",
                "city" => "Paranapuã"
            ],
            [
                "uf" => "SP",
                "city" => "Parapuã"
            ],
            [
                "uf" => "SP",
                "city" => "Pardinho"
            ],
            [
                "uf" => "SP",
                "city" => "Pariquera-açu"
            ],
            [
                "uf" => "SP",
                "city" => "Parisi"
            ],
            [
                "uf" => "SP",
                "city" => "Patrocínio Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Paulicéia"
            ],
            [
                "uf" => "SP",
                "city" => "Paulínia"
            ],
            [
                "uf" => "SP",
                "city" => "Paulistânia"
            ],
            [
                "uf" => "SP",
                "city" => "Paulo de Faria"
            ],
            [
                "uf" => "SP",
                "city" => "Pederneiras"
            ],
            [
                "uf" => "SP",
                "city" => "Pedra Bela"
            ],
            [
                "uf" => "SP",
                "city" => "Pedranópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Pedregulho"
            ],
            [
                "uf" => "SP",
                "city" => "Pedreira"
            ],
            [
                "uf" => "SP",
                "city" => "Pedrinhas Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Pedro de Toledo"
            ],
            [
                "uf" => "SP",
                "city" => "Penápolis"
            ],
            [
                "uf" => "SP",
                "city" => "Pereira Barreto"
            ],
            [
                "uf" => "SP",
                "city" => "Pereiras"
            ],
            [
                "uf" => "SP",
                "city" => "Peruíbe"
            ],
            [
                "uf" => "SP",
                "city" => "Piacatu"
            ],
            [
                "uf" => "SP",
                "city" => "Piedade"
            ],
            [
                "uf" => "SP",
                "city" => "Pilar do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Pindamonhangaba"
            ],
            [
                "uf" => "SP",
                "city" => "Pindorama"
            ],
            [
                "uf" => "SP",
                "city" => "Pinhalzinho"
            ],
            [
                "uf" => "SP",
                "city" => "Piquerobi"
            ],
            [
                "uf" => "SP",
                "city" => "Piquete"
            ],
            [
                "uf" => "SP",
                "city" => "Piracaia"
            ],
            [
                "uf" => "SP",
                "city" => "Piracicaba"
            ],
            [
                "uf" => "SP",
                "city" => "Piraju"
            ],
            [
                "uf" => "SP",
                "city" => "Pirajuí"
            ],
            [
                "uf" => "SP",
                "city" => "Pirangi"
            ],
            [
                "uf" => "SP",
                "city" => "Pirapora do Bom Jesus"
            ],
            [
                "uf" => "SP",
                "city" => "Pirapozinho"
            ],
            [
                "uf" => "SP",
                "city" => "Pirassununga"
            ],
            [
                "uf" => "SP",
                "city" => "Piratininga"
            ],
            [
                "uf" => "SP",
                "city" => "Pitangueiras"
            ],
            [
                "uf" => "SP",
                "city" => "Planalto"
            ],
            [
                "uf" => "SP",
                "city" => "Platina"
            ],
            [
                "uf" => "SP",
                "city" => "Poá"
            ],
            [
                "uf" => "SP",
                "city" => "Poloni"
            ],
            [
                "uf" => "SP",
                "city" => "Pompéia"
            ],
            [
                "uf" => "SP",
                "city" => "Pongaí"
            ],
            [
                "uf" => "SP",
                "city" => "Pontal"
            ],
            [
                "uf" => "SP",
                "city" => "Pontalinda"
            ],
            [
                "uf" => "SP",
                "city" => "Pontes Gestal"
            ],
            [
                "uf" => "SP",
                "city" => "Populina"
            ],
            [
                "uf" => "SP",
                "city" => "Porangaba"
            ],
            [
                "uf" => "SP",
                "city" => "Porto Feliz"
            ],
            [
                "uf" => "SP",
                "city" => "Porto Ferreira"
            ],
            [
                "uf" => "SP",
                "city" => "Potim"
            ],
            [
                "uf" => "SP",
                "city" => "Potirendaba"
            ],
            [
                "uf" => "SP",
                "city" => "Pracinha"
            ],
            [
                "uf" => "SP",
                "city" => "Pradópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Praia Grande"
            ],
            [
                "uf" => "SP",
                "city" => "Pratânia"
            ],
            [
                "uf" => "SP",
                "city" => "Presidente Alves"
            ],
            [
                "uf" => "SP",
                "city" => "Presidente Bernardes"
            ],
            [
                "uf" => "SP",
                "city" => "Presidente Epitácio"
            ],
            [
                "uf" => "SP",
                "city" => "Presidente Prudente"
            ],
            [
                "uf" => "SP",
                "city" => "Presidente Venceslau"
            ],
            [
                "uf" => "SP",
                "city" => "Promissão"
            ],
            [
                "uf" => "SP",
                "city" => "Quadra"
            ],
            [
                "uf" => "SP",
                "city" => "Quatá"
            ],
            [
                "uf" => "SP",
                "city" => "Queiroz"
            ],
            [
                "uf" => "SP",
                "city" => "Queluz"
            ],
            [
                "uf" => "SP",
                "city" => "Quintana"
            ],
            [
                "uf" => "SP",
                "city" => "Rafard"
            ],
            [
                "uf" => "SP",
                "city" => "Rancharia"
            ],
            [
                "uf" => "SP",
                "city" => "Redenção da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "Regente Feijó"
            ],
            [
                "uf" => "SP",
                "city" => "Reginópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Registro"
            ],
            [
                "uf" => "SP",
                "city" => "Restinga"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeira"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão Bonito"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão Branco"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão Corrente"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão Dos Índios"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão Grande"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão Pires"
            ],
            [
                "uf" => "SP",
                "city" => "Ribeirão Preto"
            ],
            [
                "uf" => "SP",
                "city" => "Riversul"
            ],
            [
                "uf" => "SP",
                "city" => "Rifaina"
            ],
            [
                "uf" => "SP",
                "city" => "Rincão"
            ],
            [
                "uf" => "SP",
                "city" => "Rinópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Rio Claro"
            ],
            [
                "uf" => "SP",
                "city" => "Rio Das Pedras"
            ],
            [
                "uf" => "SP",
                "city" => "Rio Grande da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "Riolândia"
            ],
            [
                "uf" => "SP",
                "city" => "Rosana"
            ],
            [
                "uf" => "SP",
                "city" => "Roseira"
            ],
            [
                "uf" => "SP",
                "city" => "Rubiácea"
            ],
            [
                "uf" => "SP",
                "city" => "Rubinéia"
            ],
            [
                "uf" => "SP",
                "city" => "Sabino"
            ],
            [
                "uf" => "SP",
                "city" => "Sagres"
            ],
            [
                "uf" => "SP",
                "city" => "Sales"
            ],
            [
                "uf" => "SP",
                "city" => "Sales Oliveira"
            ],
            [
                "uf" => "SP",
                "city" => "Salesópolis"
            ],
            [
                "uf" => "SP",
                "city" => "Salmourão"
            ],
            [
                "uf" => "SP",
                "city" => "Saltinho"
            ],
            [
                "uf" => "SP",
                "city" => "Salto"
            ],
            [
                "uf" => "SP",
                "city" => "Salto de Pirapora"
            ],
            [
                "uf" => "SP",
                "city" => "Salto Grande"
            ],
            [
                "uf" => "SP",
                "city" => "Sandovalina"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Adélia"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Albertina"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Bárbara D´oeste"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Branca"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Clara D´oeste"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Cruz da Conceição"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Cruz da Esperança"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Cruz Das Palmeiras"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Cruz do Rio Pardo"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Ernestina"
            ],
            [
                "uf" => "SP",
                "city" => "Santa fé do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Gertrudes"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Isabel"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Lúcia"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Maria da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Mercedes"
            ],
            [
                "uf" => "SP",
                "city" => "Santana da Ponte Pensa"
            ],
            [
                "uf" => "SP",
                "city" => "Santana de Parnaíba"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Rita D´oeste"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Rita do Passa Quatro"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Rosa de Viterbo"
            ],
            [
                "uf" => "SP",
                "city" => "Santa Salete"
            ],
            [
                "uf" => "SP",
                "city" => "Santo Anastácio"
            ],
            [
                "uf" => "SP",
                "city" => "Santo André"
            ],
            [
                "uf" => "SP",
                "city" => "Santo Antônio da Alegria"
            ],
            [
                "uf" => "SP",
                "city" => "Santo Antônio de Posse"
            ],
            [
                "uf" => "SP",
                "city" => "Santo Antônio do Aracanguá"
            ],
            [
                "uf" => "SP",
                "city" => "Santo Antônio do Jardim"
            ],
            [
                "uf" => "SP",
                "city" => "Santo Antônio do Pinhal"
            ],
            [
                "uf" => "SP",
                "city" => "Santo Expedito"
            ],
            [
                "uf" => "SP",
                "city" => "Santópolis do Aguapeí"
            ],
            [
                "uf" => "SP",
                "city" => "Santos"
            ],
            [
                "uf" => "SP",
                "city" => "São Bento do Sapucaí"
            ],
            [
                "uf" => "SP",
                "city" => "São Bernardo do Campo"
            ],
            [
                "uf" => "SP",
                "city" => "São Caetano do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "São Carlos"
            ],
            [
                "uf" => "SP",
                "city" => "São Francisco"
            ],
            [
                "uf" => "SP",
                "city" => "São João da Boa Vista"
            ],
            [
                "uf" => "SP",
                "city" => "São João Das Duas Pontes"
            ],
            [
                "uf" => "SP",
                "city" => "São João de Iracema"
            ],
            [
                "uf" => "SP",
                "city" => "São João do Pau D´alho"
            ],
            [
                "uf" => "SP",
                "city" => "São Joaquim da Barra"
            ],
            [
                "uf" => "SP",
                "city" => "São José da Bela Vista"
            ],
            [
                "uf" => "SP",
                "city" => "São José do Barreiro"
            ],
            [
                "uf" => "SP",
                "city" => "São José do Rio Pardo"
            ],
            [
                "uf" => "SP",
                "city" => "São José do Rio Preto"
            ],
            [
                "uf" => "SP",
                "city" => "São José Dos Campos"
            ],
            [
                "uf" => "SP",
                "city" => "São Lourenço da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "São Luís do Paraitinga"
            ],
            [
                "uf" => "SP",
                "city" => "São Manuel"
            ],
            [
                "uf" => "SP",
                "city" => "São Miguel Arcanjo"
            ],
            [
                "uf" => "SP",
                "city" => "São Paulo"
            ],
            [
                "uf" => "SP",
                "city" => "São Pedro"
            ],
            [
                "uf" => "SP",
                "city" => "São Pedro do Turvo"
            ],
            [
                "uf" => "SP",
                "city" => "São Roque"
            ],
            [
                "uf" => "SP",
                "city" => "São Sebastião"
            ],
            [
                "uf" => "SP",
                "city" => "São Sebastião da Grama"
            ],
            [
                "uf" => "SP",
                "city" => "São Simão"
            ],
            [
                "uf" => "SP",
                "city" => "São Vicente"
            ],
            [
                "uf" => "SP",
                "city" => "Sarapuí"
            ],
            [
                "uf" => "SP",
                "city" => "Sarutaiá"
            ],
            [
                "uf" => "SP",
                "city" => "Sebastianópolis do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Serra Azul"
            ],
            [
                "uf" => "SP",
                "city" => "Serrana"
            ],
            [
                "uf" => "SP",
                "city" => "Serra Negra"
            ],
            [
                "uf" => "SP",
                "city" => "Sertãozinho"
            ],
            [
                "uf" => "SP",
                "city" => "Sete Barras"
            ],
            [
                "uf" => "SP",
                "city" => "Severínia"
            ],
            [
                "uf" => "SP",
                "city" => "Silveiras"
            ],
            [
                "uf" => "SP",
                "city" => "Socorro"
            ],
            [
                "uf" => "SP",
                "city" => "Sorocaba"
            ],
            [
                "uf" => "SP",
                "city" => "Sud Mennucci"
            ],
            [
                "uf" => "SP",
                "city" => "Sumaré"
            ],
            [
                "uf" => "SP",
                "city" => "Suzano"
            ],
            [
                "uf" => "SP",
                "city" => "Suzanápolis"
            ],
            [
                "uf" => "SP",
                "city" => "Tabapuã"
            ],
            [
                "uf" => "SP",
                "city" => "Tabatinga"
            ],
            [
                "uf" => "SP",
                "city" => "Taboão da Serra"
            ],
            [
                "uf" => "SP",
                "city" => "Taciba"
            ],
            [
                "uf" => "SP",
                "city" => "Taguaí"
            ],
            [
                "uf" => "SP",
                "city" => "Taiaçu"
            ],
            [
                "uf" => "SP",
                "city" => "Taiúva"
            ],
            [
                "uf" => "SP",
                "city" => "Tambaú"
            ],
            [
                "uf" => "SP",
                "city" => "Tanabi"
            ],
            [
                "uf" => "SP",
                "city" => "Tapiraí"
            ],
            [
                "uf" => "SP",
                "city" => "Tapiratiba"
            ],
            [
                "uf" => "SP",
                "city" => "Taquaral"
            ],
            [
                "uf" => "SP",
                "city" => "Taquaritinga"
            ],
            [
                "uf" => "SP",
                "city" => "Taquarituba"
            ],
            [
                "uf" => "SP",
                "city" => "Taquarivaí"
            ],
            [
                "uf" => "SP",
                "city" => "Tarabai"
            ],
            [
                "uf" => "SP",
                "city" => "Tarumã"
            ],
            [
                "uf" => "SP",
                "city" => "Tatuí"
            ],
            [
                "uf" => "SP",
                "city" => "Taubaté"
            ],
            [
                "uf" => "SP",
                "city" => "Tejupá"
            ],
            [
                "uf" => "SP",
                "city" => "Teodoro Sampaio"
            ],
            [
                "uf" => "SP",
                "city" => "Terra Roxa"
            ],
            [
                "uf" => "SP",
                "city" => "Tietê"
            ],
            [
                "uf" => "SP",
                "city" => "Timburi"
            ],
            [
                "uf" => "SP",
                "city" => "Torre de Pedra"
            ],
            [
                "uf" => "SP",
                "city" => "Torrinha"
            ],
            [
                "uf" => "SP",
                "city" => "Trabiju"
            ],
            [
                "uf" => "SP",
                "city" => "Tremembé"
            ],
            [
                "uf" => "SP",
                "city" => "Três Fronteiras"
            ],
            [
                "uf" => "SP",
                "city" => "Tuiuti"
            ],
            [
                "uf" => "SP",
                "city" => "Tupã"
            ],
            [
                "uf" => "SP",
                "city" => "Tupi Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Turiúba"
            ],
            [
                "uf" => "SP",
                "city" => "Turmalina"
            ],
            [
                "uf" => "SP",
                "city" => "Ubarana"
            ],
            [
                "uf" => "SP",
                "city" => "Ubatuba"
            ],
            [
                "uf" => "SP",
                "city" => "Ubirajara"
            ],
            [
                "uf" => "SP",
                "city" => "Uchoa"
            ],
            [
                "uf" => "SP",
                "city" => "União Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Urânia"
            ],
            [
                "uf" => "SP",
                "city" => "Uru"
            ],
            [
                "uf" => "SP",
                "city" => "Urupês"
            ],
            [
                "uf" => "SP",
                "city" => "Valentim Gentil"
            ],
            [
                "uf" => "SP",
                "city" => "Valinhos"
            ],
            [
                "uf" => "SP",
                "city" => "Valparaíso"
            ],
            [
                "uf" => "SP",
                "city" => "Vargem"
            ],
            [
                "uf" => "SP",
                "city" => "Vargem Grande do Sul"
            ],
            [
                "uf" => "SP",
                "city" => "Vargem Grande Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Várzea Paulista"
            ],
            [
                "uf" => "SP",
                "city" => "Vera Cruz"
            ],
            [
                "uf" => "SP",
                "city" => "Vinhedo"
            ],
            [
                "uf" => "SP",
                "city" => "Viradouro"
            ],
            [
                "uf" => "SP",
                "city" => "Vista Alegre do Alto"
            ],
            [
                "uf" => "SP",
                "city" => "Vitória Brasil"
            ],
            [
                "uf" => "SP",
                "city" => "Votorantim"
            ],
            [
                "uf" => "SP",
                "city" => "Votuporanga"
            ],
            [
                "uf" => "SP",
                "city" => "Zacarias"
            ],
            [
                "uf" => "SP",
                "city" => "Chavantes"
            ],
            [
                "uf" => "SP",
                "city" => "Estiva Gerbi"
            ],
            [
                "uf" => "PR",
                "city" => "Abatiá"
            ],
            [
                "uf" => "PR",
                "city" => "Adrianópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Agudos do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Almirante Tamandaré"
            ],
            [
                "uf" => "PR",
                "city" => "Altamira do Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "Altônia"
            ],
            [
                "uf" => "PR",
                "city" => "Alto Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "Alto Piquiri"
            ],
            [
                "uf" => "PR",
                "city" => "Alvorada do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Amaporã"
            ],
            [
                "uf" => "PR",
                "city" => "Ampére"
            ],
            [
                "uf" => "PR",
                "city" => "Anahy"
            ],
            [
                "uf" => "PR",
                "city" => "Andirá"
            ],
            [
                "uf" => "PR",
                "city" => "Ângulo"
            ],
            [
                "uf" => "PR",
                "city" => "Antonina"
            ],
            [
                "uf" => "PR",
                "city" => "Antônio Olinto"
            ],
            [
                "uf" => "PR",
                "city" => "Apucarana"
            ],
            [
                "uf" => "PR",
                "city" => "Arapongas"
            ],
            [
                "uf" => "PR",
                "city" => "Arapoti"
            ],
            [
                "uf" => "PR",
                "city" => "Arapuã"
            ],
            [
                "uf" => "PR",
                "city" => "Araruna"
            ],
            [
                "uf" => "PR",
                "city" => "Araucária"
            ],
            [
                "uf" => "PR",
                "city" => "Ariranha do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "Assaí"
            ],
            [
                "uf" => "PR",
                "city" => "Assis Chateaubriand"
            ],
            [
                "uf" => "PR",
                "city" => "Astorga"
            ],
            [
                "uf" => "PR",
                "city" => "Atalaia"
            ],
            [
                "uf" => "PR",
                "city" => "Balsa Nova"
            ],
            [
                "uf" => "PR",
                "city" => "Bandeirantes"
            ],
            [
                "uf" => "PR",
                "city" => "Barbosa Ferraz"
            ],
            [
                "uf" => "PR",
                "city" => "Barracão"
            ],
            [
                "uf" => "PR",
                "city" => "Barra do Jacaré"
            ],
            [
                "uf" => "PR",
                "city" => "Bela Vista da Caroba"
            ],
            [
                "uf" => "PR",
                "city" => "Bela Vista do Paraíso"
            ],
            [
                "uf" => "PR",
                "city" => "Bituruna"
            ],
            [
                "uf" => "PR",
                "city" => "Boa Esperança"
            ],
            [
                "uf" => "PR",
                "city" => "Boa Esperança do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Boa Ventura de São Roque"
            ],
            [
                "uf" => "PR",
                "city" => "Boa Vista da Aparecida"
            ],
            [
                "uf" => "PR",
                "city" => "Bocaiúva do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Bom Jesus do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Bom Sucesso"
            ],
            [
                "uf" => "PR",
                "city" => "Bom Sucesso do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Borrazópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Braganey"
            ],
            [
                "uf" => "PR",
                "city" => "Brasilândia do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Cafeara"
            ],
            [
                "uf" => "PR",
                "city" => "Cafelândia"
            ],
            [
                "uf" => "PR",
                "city" => "Cafezal do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Califórnia"
            ],
            [
                "uf" => "PR",
                "city" => "Cambará"
            ],
            [
                "uf" => "PR",
                "city" => "Cambé"
            ],
            [
                "uf" => "PR",
                "city" => "Cambira"
            ],
            [
                "uf" => "PR",
                "city" => "Campina da Lagoa"
            ],
            [
                "uf" => "PR",
                "city" => "Campina do Simão"
            ],
            [
                "uf" => "PR",
                "city" => "Campina Grande do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Campo Bonito"
            ],
            [
                "uf" => "PR",
                "city" => "Campo do Tenente"
            ],
            [
                "uf" => "PR",
                "city" => "Campo Largo"
            ],
            [
                "uf" => "PR",
                "city" => "Campo Magro"
            ],
            [
                "uf" => "PR",
                "city" => "Campo Mourão"
            ],
            [
                "uf" => "PR",
                "city" => "Cândido de Abreu"
            ],
            [
                "uf" => "PR",
                "city" => "Candói"
            ],
            [
                "uf" => "PR",
                "city" => "Cantagalo"
            ],
            [
                "uf" => "PR",
                "city" => "Capanema"
            ],
            [
                "uf" => "PR",
                "city" => "Capitão Leônidas Marques"
            ],
            [
                "uf" => "PR",
                "city" => "Carambeí"
            ],
            [
                "uf" => "PR",
                "city" => "Carlópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Cascavel"
            ],
            [
                "uf" => "PR",
                "city" => "Castro"
            ],
            [
                "uf" => "PR",
                "city" => "Catanduvas"
            ],
            [
                "uf" => "PR",
                "city" => "Centenário do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Cerro Azul"
            ],
            [
                "uf" => "PR",
                "city" => "Céu Azul"
            ],
            [
                "uf" => "PR",
                "city" => "Chopinzinho"
            ],
            [
                "uf" => "PR",
                "city" => "Cianorte"
            ],
            [
                "uf" => "PR",
                "city" => "Cidade Gaúcha"
            ],
            [
                "uf" => "PR",
                "city" => "Clevelândia"
            ],
            [
                "uf" => "PR",
                "city" => "Colombo"
            ],
            [
                "uf" => "PR",
                "city" => "Colorado"
            ],
            [
                "uf" => "PR",
                "city" => "Congonhinhas"
            ],
            [
                "uf" => "PR",
                "city" => "Conselheiro Mairinck"
            ],
            [
                "uf" => "PR",
                "city" => "Contenda"
            ],
            [
                "uf" => "PR",
                "city" => "Corbélia"
            ],
            [
                "uf" => "PR",
                "city" => "Cornélio Procópio"
            ],
            [
                "uf" => "PR",
                "city" => "Coronel Domingos Soares"
            ],
            [
                "uf" => "PR",
                "city" => "Coronel Vivida"
            ],
            [
                "uf" => "PR",
                "city" => "Corumbataí do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Cruzeiro do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Cruzeiro do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Cruzeiro do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Cruz Machado"
            ],
            [
                "uf" => "PR",
                "city" => "Cruzmaltina"
            ],
            [
                "uf" => "PR",
                "city" => "Curitiba"
            ],
            [
                "uf" => "PR",
                "city" => "Curiúva"
            ],
            [
                "uf" => "PR",
                "city" => "Diamante do Norte"
            ],
            [
                "uf" => "PR",
                "city" => "Diamante do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Diamante D´oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Dois Vizinhos"
            ],
            [
                "uf" => "PR",
                "city" => "Douradina"
            ],
            [
                "uf" => "PR",
                "city" => "Doutor Camargo"
            ],
            [
                "uf" => "PR",
                "city" => "Enéas Marques"
            ],
            [
                "uf" => "PR",
                "city" => "Engenheiro Beltrão"
            ],
            [
                "uf" => "PR",
                "city" => "Esperança Nova"
            ],
            [
                "uf" => "PR",
                "city" => "Entre Rios do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Espigão Alto do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Farol"
            ],
            [
                "uf" => "PR",
                "city" => "Faxinal"
            ],
            [
                "uf" => "PR",
                "city" => "Fazenda Rio Grande"
            ],
            [
                "uf" => "PR",
                "city" => "Fênix"
            ],
            [
                "uf" => "PR",
                "city" => "Fernandes Pinheiro"
            ],
            [
                "uf" => "PR",
                "city" => "Figueira"
            ],
            [
                "uf" => "PR",
                "city" => "Floraí"
            ],
            [
                "uf" => "PR",
                "city" => "Flor da Serra do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Floresta"
            ],
            [
                "uf" => "PR",
                "city" => "Florestópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Flórida"
            ],
            [
                "uf" => "PR",
                "city" => "Formosa do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Foz do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Francisco Alves"
            ],
            [
                "uf" => "PR",
                "city" => "Francisco Beltrão"
            ],
            [
                "uf" => "PR",
                "city" => "Foz do Jordão"
            ],
            [
                "uf" => "PR",
                "city" => "General Carneiro"
            ],
            [
                "uf" => "PR",
                "city" => "Godoy Moreira"
            ],
            [
                "uf" => "PR",
                "city" => "Goioerê"
            ],
            [
                "uf" => "PR",
                "city" => "Goioxim"
            ],
            [
                "uf" => "PR",
                "city" => "Grandes Rios"
            ],
            [
                "uf" => "PR",
                "city" => "Guaíra"
            ],
            [
                "uf" => "PR",
                "city" => "Guairaçá"
            ],
            [
                "uf" => "PR",
                "city" => "Guamiranga"
            ],
            [
                "uf" => "PR",
                "city" => "Guapirama"
            ],
            [
                "uf" => "PR",
                "city" => "Guaporema"
            ],
            [
                "uf" => "PR",
                "city" => "Guaraci"
            ],
            [
                "uf" => "PR",
                "city" => "Guaraniaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Guarapuava"
            ],
            [
                "uf" => "PR",
                "city" => "Guaraqueçaba"
            ],
            [
                "uf" => "PR",
                "city" => "Guaratuba"
            ],
            [
                "uf" => "PR",
                "city" => "Honório Serpa"
            ],
            [
                "uf" => "PR",
                "city" => "Ibaiti"
            ],
            [
                "uf" => "PR",
                "city" => "Ibema"
            ],
            [
                "uf" => "PR",
                "city" => "Ibiporã"
            ],
            [
                "uf" => "PR",
                "city" => "Icaraíma"
            ],
            [
                "uf" => "PR",
                "city" => "Iguaraçu"
            ],
            [
                "uf" => "PR",
                "city" => "Iguatu"
            ],
            [
                "uf" => "PR",
                "city" => "Imbaú"
            ],
            [
                "uf" => "PR",
                "city" => "Imbituva"
            ],
            [
                "uf" => "PR",
                "city" => "Inácio Martins"
            ],
            [
                "uf" => "PR",
                "city" => "Inajá"
            ],
            [
                "uf" => "PR",
                "city" => "Indianópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Ipiranga"
            ],
            [
                "uf" => "PR",
                "city" => "Iporã"
            ],
            [
                "uf" => "PR",
                "city" => "Iracema do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Irati"
            ],
            [
                "uf" => "PR",
                "city" => "Iretama"
            ],
            [
                "uf" => "PR",
                "city" => "Itaguajé"
            ],
            [
                "uf" => "PR",
                "city" => "Itaipulândia"
            ],
            [
                "uf" => "PR",
                "city" => "Itambaracá"
            ],
            [
                "uf" => "PR",
                "city" => "Itambé"
            ],
            [
                "uf" => "PR",
                "city" => "Itapejara D´oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Itaperuçu"
            ],
            [
                "uf" => "PR",
                "city" => "Itaúna do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "Ivaiporã"
            ],
            [
                "uf" => "PR",
                "city" => "Ivaté"
            ],
            [
                "uf" => "PR",
                "city" => "Ivatuba"
            ],
            [
                "uf" => "PR",
                "city" => "Jaboti"
            ],
            [
                "uf" => "PR",
                "city" => "Jacarezinho"
            ],
            [
                "uf" => "PR",
                "city" => "Jaguapitã"
            ],
            [
                "uf" => "PR",
                "city" => "Jaguariaíva"
            ],
            [
                "uf" => "PR",
                "city" => "Jandaia do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Janiópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Japira"
            ],
            [
                "uf" => "PR",
                "city" => "Japurá"
            ],
            [
                "uf" => "PR",
                "city" => "Jardim Alegre"
            ],
            [
                "uf" => "PR",
                "city" => "Jardim Olinda"
            ],
            [
                "uf" => "PR",
                "city" => "Jataizinho"
            ],
            [
                "uf" => "PR",
                "city" => "Jesuítas"
            ],
            [
                "uf" => "PR",
                "city" => "Joaquim Távora"
            ],
            [
                "uf" => "PR",
                "city" => "Jundiaí do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Juranda"
            ],
            [
                "uf" => "PR",
                "city" => "Jussara"
            ],
            [
                "uf" => "PR",
                "city" => "Kaloré"
            ],
            [
                "uf" => "PR",
                "city" => "Lapa"
            ],
            [
                "uf" => "PR",
                "city" => "Laranjal"
            ],
            [
                "uf" => "PR",
                "city" => "Laranjeiras do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Leópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Lidianópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Lindoeste"
            ],
            [
                "uf" => "PR",
                "city" => "Loanda"
            ],
            [
                "uf" => "PR",
                "city" => "Lobato"
            ],
            [
                "uf" => "PR",
                "city" => "Londrina"
            ],
            [
                "uf" => "PR",
                "city" => "Luiziana"
            ],
            [
                "uf" => "PR",
                "city" => "Lunardelli"
            ],
            [
                "uf" => "PR",
                "city" => "Lupionópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Mallet"
            ],
            [
                "uf" => "PR",
                "city" => "Mamborê"
            ],
            [
                "uf" => "PR",
                "city" => "Mandaguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Mandaguari"
            ],
            [
                "uf" => "PR",
                "city" => "Mandirituba"
            ],
            [
                "uf" => "PR",
                "city" => "Manfrinópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Mangueirinha"
            ],
            [
                "uf" => "PR",
                "city" => "Manoel Ribas"
            ],
            [
                "uf" => "PR",
                "city" => "Marechal Cândido Rondon"
            ],
            [
                "uf" => "PR",
                "city" => "Maria Helena"
            ],
            [
                "uf" => "PR",
                "city" => "Marialva"
            ],
            [
                "uf" => "PR",
                "city" => "Marilândia do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Marilena"
            ],
            [
                "uf" => "PR",
                "city" => "Mariluz"
            ],
            [
                "uf" => "PR",
                "city" => "Maringá"
            ],
            [
                "uf" => "PR",
                "city" => "Mariópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Maripá"
            ],
            [
                "uf" => "PR",
                "city" => "Marmeleiro"
            ],
            [
                "uf" => "PR",
                "city" => "Marquinho"
            ],
            [
                "uf" => "PR",
                "city" => "Marumbi"
            ],
            [
                "uf" => "PR",
                "city" => "Matelândia"
            ],
            [
                "uf" => "PR",
                "city" => "Matinhos"
            ],
            [
                "uf" => "PR",
                "city" => "Mato Rico"
            ],
            [
                "uf" => "PR",
                "city" => "Mauá da Serra"
            ],
            [
                "uf" => "PR",
                "city" => "Medianeira"
            ],
            [
                "uf" => "PR",
                "city" => "Mercedes"
            ],
            [
                "uf" => "PR",
                "city" => "Mirador"
            ],
            [
                "uf" => "PR",
                "city" => "Miraselva"
            ],
            [
                "uf" => "PR",
                "city" => "Missal"
            ],
            [
                "uf" => "PR",
                "city" => "Moreira Sales"
            ],
            [
                "uf" => "PR",
                "city" => "Morretes"
            ],
            [
                "uf" => "PR",
                "city" => "Munhoz de Melo"
            ],
            [
                "uf" => "PR",
                "city" => "Nossa Senhora Das Graças"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Aliança do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "Nova América da Colina"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Aurora"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Cantu"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Esperança"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Esperança do Sudoeste"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Fátima"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Laranjeiras"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Londrina"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Olímpia"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Santa Bárbara"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Santa Rosa"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Prata do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Nova Tebas"
            ],
            [
                "uf" => "PR",
                "city" => "Novo Itacolomi"
            ],
            [
                "uf" => "PR",
                "city" => "Ortigueira"
            ],
            [
                "uf" => "PR",
                "city" => "Ourizona"
            ],
            [
                "uf" => "PR",
                "city" => "Ouro Verde do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Paiçandu"
            ],
            [
                "uf" => "PR",
                "city" => "Palmas"
            ],
            [
                "uf" => "PR",
                "city" => "Palmeira"
            ],
            [
                "uf" => "PR",
                "city" => "Palmital"
            ],
            [
                "uf" => "PR",
                "city" => "Palotina"
            ],
            [
                "uf" => "PR",
                "city" => "Paraíso do Norte"
            ],
            [
                "uf" => "PR",
                "city" => "Paranacity"
            ],
            [
                "uf" => "PR",
                "city" => "Paranaguá"
            ],
            [
                "uf" => "PR",
                "city" => "Paranapoema"
            ],
            [
                "uf" => "PR",
                "city" => "Paranavaí"
            ],
            [
                "uf" => "PR",
                "city" => "Pato Bragado"
            ],
            [
                "uf" => "PR",
                "city" => "Pato Branco"
            ],
            [
                "uf" => "PR",
                "city" => "Paula Freitas"
            ],
            [
                "uf" => "PR",
                "city" => "Paulo Frontin"
            ],
            [
                "uf" => "PR",
                "city" => "Peabiru"
            ],
            [
                "uf" => "PR",
                "city" => "Perobal"
            ],
            [
                "uf" => "PR",
                "city" => "Pérola"
            ],
            [
                "uf" => "PR",
                "city" => "Pérola D´oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Piên"
            ],
            [
                "uf" => "PR",
                "city" => "Pinhais"
            ],
            [
                "uf" => "PR",
                "city" => "Pinhalão"
            ],
            [
                "uf" => "PR",
                "city" => "Pinhal de São Bento"
            ],
            [
                "uf" => "PR",
                "city" => "Pinhão"
            ],
            [
                "uf" => "PR",
                "city" => "Piraí do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Piraquara"
            ],
            [
                "uf" => "PR",
                "city" => "Pitanga"
            ],
            [
                "uf" => "PR",
                "city" => "Pitangueiras"
            ],
            [
                "uf" => "PR",
                "city" => "Planaltina do Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "Planalto"
            ],
            [
                "uf" => "PR",
                "city" => "Ponta Grossa"
            ],
            [
                "uf" => "PR",
                "city" => "Pontal do Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "Porecatu"
            ],
            [
                "uf" => "PR",
                "city" => "Porto Amazonas"
            ],
            [
                "uf" => "PR",
                "city" => "Porto Barreiro"
            ],
            [
                "uf" => "PR",
                "city" => "Porto Rico"
            ],
            [
                "uf" => "PR",
                "city" => "Porto Vitória"
            ],
            [
                "uf" => "PR",
                "city" => "Prado Ferreira"
            ],
            [
                "uf" => "PR",
                "city" => "Pranchita"
            ],
            [
                "uf" => "PR",
                "city" => "Presidente Castelo Branco"
            ],
            [
                "uf" => "PR",
                "city" => "Primeiro de Maio"
            ],
            [
                "uf" => "PR",
                "city" => "Prudentópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Quarto Centenário"
            ],
            [
                "uf" => "PR",
                "city" => "Quatiguá"
            ],
            [
                "uf" => "PR",
                "city" => "Quatro Barras"
            ],
            [
                "uf" => "PR",
                "city" => "Quatro Pontes"
            ],
            [
                "uf" => "PR",
                "city" => "Quedas do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Querência do Norte"
            ],
            [
                "uf" => "PR",
                "city" => "Quinta do Sol"
            ],
            [
                "uf" => "PR",
                "city" => "Quitandinha"
            ],
            [
                "uf" => "PR",
                "city" => "Ramilândia"
            ],
            [
                "uf" => "PR",
                "city" => "Rancho Alegre"
            ],
            [
                "uf" => "PR",
                "city" => "Rancho Alegre D´oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Realeza"
            ],
            [
                "uf" => "PR",
                "city" => "Rebouças"
            ],
            [
                "uf" => "PR",
                "city" => "Renascença"
            ],
            [
                "uf" => "PR",
                "city" => "Reserva"
            ],
            [
                "uf" => "PR",
                "city" => "Reserva do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Ribeirão Claro"
            ],
            [
                "uf" => "PR",
                "city" => "Ribeirão do Pinhal"
            ],
            [
                "uf" => "PR",
                "city" => "Rio Azul"
            ],
            [
                "uf" => "PR",
                "city" => "Rio Bom"
            ],
            [
                "uf" => "PR",
                "city" => "Rio Bonito do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Rio Branco do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "Rio Branco do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Rio Negro"
            ],
            [
                "uf" => "PR",
                "city" => "Rolândia"
            ],
            [
                "uf" => "PR",
                "city" => "Roncador"
            ],
            [
                "uf" => "PR",
                "city" => "Rondon"
            ],
            [
                "uf" => "PR",
                "city" => "Rosário do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "Sabáudia"
            ],
            [
                "uf" => "PR",
                "city" => "Salgado Filho"
            ],
            [
                "uf" => "PR",
                "city" => "Salto do Itararé"
            ],
            [
                "uf" => "PR",
                "city" => "Salto do Lontra"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Amélia"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Cecília do Pavão"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Cruz de Monte Castelo"
            ],
            [
                "uf" => "PR",
                "city" => "Santa fé"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Helena"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Inês"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Isabel do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Izabel do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Lúcia"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Maria do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Mariana"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Mônica"
            ],
            [
                "uf" => "PR",
                "city" => "Santana do Itararé"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Tereza do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Santa Terezinha de Itaipu"
            ],
            [
                "uf" => "PR",
                "city" => "Santo Antônio da Platina"
            ],
            [
                "uf" => "PR",
                "city" => "Santo Antônio do Caiuá"
            ],
            [
                "uf" => "PR",
                "city" => "Santo Antônio do Paraíso"
            ],
            [
                "uf" => "PR",
                "city" => "Santo Antônio do Sudoeste"
            ],
            [
                "uf" => "PR",
                "city" => "Santo Inácio"
            ],
            [
                "uf" => "PR",
                "city" => "São Carlos do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "São Jerônimo da Serra"
            ],
            [
                "uf" => "PR",
                "city" => "São João"
            ],
            [
                "uf" => "PR",
                "city" => "São João do Caiuá"
            ],
            [
                "uf" => "PR",
                "city" => "São João do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "São João do Triunfo"
            ],
            [
                "uf" => "PR",
                "city" => "São Jorge D´oeste"
            ],
            [
                "uf" => "PR",
                "city" => "São Jorge do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "São Jorge do Patrocínio"
            ],
            [
                "uf" => "PR",
                "city" => "São José da Boa Vista"
            ],
            [
                "uf" => "PR",
                "city" => "São José Das Palmeiras"
            ],
            [
                "uf" => "PR",
                "city" => "São José Dos Pinhais"
            ],
            [
                "uf" => "PR",
                "city" => "São Manoel do Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "São Mateus do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "São Miguel do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "São Pedro do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "São Pedro do Ivaí"
            ],
            [
                "uf" => "PR",
                "city" => "São Pedro do Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "São Sebastião da Amoreira"
            ],
            [
                "uf" => "PR",
                "city" => "São Tomé"
            ],
            [
                "uf" => "PR",
                "city" => "Sapopema"
            ],
            [
                "uf" => "PR",
                "city" => "Sarandi"
            ],
            [
                "uf" => "PR",
                "city" => "Saudade do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Sengés"
            ],
            [
                "uf" => "PR",
                "city" => "Serranópolis do Iguaçu"
            ],
            [
                "uf" => "PR",
                "city" => "Sertaneja"
            ],
            [
                "uf" => "PR",
                "city" => "Sertanópolis"
            ],
            [
                "uf" => "PR",
                "city" => "Siqueira Campos"
            ],
            [
                "uf" => "PR",
                "city" => "Sulina"
            ],
            [
                "uf" => "PR",
                "city" => "Tamarana"
            ],
            [
                "uf" => "PR",
                "city" => "Tamboara"
            ],
            [
                "uf" => "PR",
                "city" => "Tapejara"
            ],
            [
                "uf" => "PR",
                "city" => "Tapira"
            ],
            [
                "uf" => "PR",
                "city" => "Teixeira Soares"
            ],
            [
                "uf" => "PR",
                "city" => "Telêmaco Borba"
            ],
            [
                "uf" => "PR",
                "city" => "Terra Boa"
            ],
            [
                "uf" => "PR",
                "city" => "Terra Rica"
            ],
            [
                "uf" => "PR",
                "city" => "Terra Roxa"
            ],
            [
                "uf" => "PR",
                "city" => "Tibagi"
            ],
            [
                "uf" => "PR",
                "city" => "Tijucas do Sul"
            ],
            [
                "uf" => "PR",
                "city" => "Toledo"
            ],
            [
                "uf" => "PR",
                "city" => "Tomazina"
            ],
            [
                "uf" => "PR",
                "city" => "Três Barras do Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "Tunas do Paraná"
            ],
            [
                "uf" => "PR",
                "city" => "Tuneiras do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Tupãssi"
            ],
            [
                "uf" => "PR",
                "city" => "Turvo"
            ],
            [
                "uf" => "PR",
                "city" => "Ubiratã"
            ],
            [
                "uf" => "PR",
                "city" => "Umuarama"
            ],
            [
                "uf" => "PR",
                "city" => "União da Vitória"
            ],
            [
                "uf" => "PR",
                "city" => "Uniflor"
            ],
            [
                "uf" => "PR",
                "city" => "Uraí"
            ],
            [
                "uf" => "PR",
                "city" => "Wenceslau Braz"
            ],
            [
                "uf" => "PR",
                "city" => "Ventania"
            ],
            [
                "uf" => "PR",
                "city" => "Vera Cruz do Oeste"
            ],
            [
                "uf" => "PR",
                "city" => "Verê"
            ],
            [
                "uf" => "PR",
                "city" => "Vila Alta"
            ],
            [
                "uf" => "PR",
                "city" => "Doutor Ulysses"
            ],
            [
                "uf" => "PR",
                "city" => "Virmond"
            ],
            [
                "uf" => "PR",
                "city" => "Vitorino"
            ],
            [
                "uf" => "PR",
                "city" => "Xambrê"
            ],
            [
                "uf" => "SC",
                "city" => "Abdon Batista"
            ],
            [
                "uf" => "SC",
                "city" => "Abelardo Luz"
            ],
            [
                "uf" => "SC",
                "city" => "Agrolândia"
            ],
            [
                "uf" => "SC",
                "city" => "Agronômica"
            ],
            [
                "uf" => "SC",
                "city" => "Água Doce"
            ],
            [
                "uf" => "SC",
                "city" => "Águas de Chapecó"
            ],
            [
                "uf" => "SC",
                "city" => "Águas Frias"
            ],
            [
                "uf" => "SC",
                "city" => "Águas Mornas"
            ],
            [
                "uf" => "SC",
                "city" => "Alfredo Wagner"
            ],
            [
                "uf" => "SC",
                "city" => "Alto Bela Vista"
            ],
            [
                "uf" => "SC",
                "city" => "Anchieta"
            ],
            [
                "uf" => "SC",
                "city" => "Angelina"
            ],
            [
                "uf" => "SC",
                "city" => "Anita Garibaldi"
            ],
            [
                "uf" => "SC",
                "city" => "Anitápolis"
            ],
            [
                "uf" => "SC",
                "city" => "Antônio Carlos"
            ],
            [
                "uf" => "SC",
                "city" => "Apiúna"
            ],
            [
                "uf" => "SC",
                "city" => "Arabutã"
            ],
            [
                "uf" => "SC",
                "city" => "Araquari"
            ],
            [
                "uf" => "SC",
                "city" => "Araranguá"
            ],
            [
                "uf" => "SC",
                "city" => "Armazém"
            ],
            [
                "uf" => "SC",
                "city" => "Arroio Trinta"
            ],
            [
                "uf" => "SC",
                "city" => "Arvoredo"
            ],
            [
                "uf" => "SC",
                "city" => "Ascurra"
            ],
            [
                "uf" => "SC",
                "city" => "Atalanta"
            ],
            [
                "uf" => "SC",
                "city" => "Aurora"
            ],
            [
                "uf" => "SC",
                "city" => "Balneário Arroio do Silva"
            ],
            [
                "uf" => "SC",
                "city" => "Balneário Camboriú"
            ],
            [
                "uf" => "SC",
                "city" => "Balneário Barra do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Balneário Gaivota"
            ],
            [
                "uf" => "SC",
                "city" => "Bandeirante"
            ],
            [
                "uf" => "SC",
                "city" => "Barra Bonita"
            ],
            [
                "uf" => "SC",
                "city" => "Barra Velha"
            ],
            [
                "uf" => "SC",
                "city" => "Bela Vista do Toldo"
            ],
            [
                "uf" => "SC",
                "city" => "Belmonte"
            ],
            [
                "uf" => "SC",
                "city" => "Benedito Novo"
            ],
            [
                "uf" => "SC",
                "city" => "Biguaçu"
            ],
            [
                "uf" => "SC",
                "city" => "Blumenau"
            ],
            [
                "uf" => "SC",
                "city" => "Bocaina do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Bombinhas"
            ],
            [
                "uf" => "SC",
                "city" => "Bom Jardim da Serra"
            ],
            [
                "uf" => "SC",
                "city" => "Bom Jesus"
            ],
            [
                "uf" => "SC",
                "city" => "Bom Jesus do Oeste"
            ],
            [
                "uf" => "SC",
                "city" => "Bom Retiro"
            ],
            [
                "uf" => "SC",
                "city" => "Botuverá"
            ],
            [
                "uf" => "SC",
                "city" => "Braço do Norte"
            ],
            [
                "uf" => "SC",
                "city" => "Braço do Trombudo"
            ],
            [
                "uf" => "SC",
                "city" => "Brunópolis"
            ],
            [
                "uf" => "SC",
                "city" => "Brusque"
            ],
            [
                "uf" => "SC",
                "city" => "Caçador"
            ],
            [
                "uf" => "SC",
                "city" => "Caibi"
            ],
            [
                "uf" => "SC",
                "city" => "Calmon"
            ],
            [
                "uf" => "SC",
                "city" => "Camboriú"
            ],
            [
                "uf" => "SC",
                "city" => "Capão Alto"
            ],
            [
                "uf" => "SC",
                "city" => "Campo Alegre"
            ],
            [
                "uf" => "SC",
                "city" => "Campo Belo do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Campo Erê"
            ],
            [
                "uf" => "SC",
                "city" => "Campos Novos"
            ],
            [
                "uf" => "SC",
                "city" => "Canelinha"
            ],
            [
                "uf" => "SC",
                "city" => "Canoinhas"
            ],
            [
                "uf" => "SC",
                "city" => "Capinzal"
            ],
            [
                "uf" => "SC",
                "city" => "Capivari de Baixo"
            ],
            [
                "uf" => "SC",
                "city" => "Catanduvas"
            ],
            [
                "uf" => "SC",
                "city" => "Caxambu do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Celso Ramos"
            ],
            [
                "uf" => "SC",
                "city" => "Cerro Negro"
            ],
            [
                "uf" => "SC",
                "city" => "Chapadão do Lageado"
            ],
            [
                "uf" => "SC",
                "city" => "Chapecó"
            ],
            [
                "uf" => "SC",
                "city" => "Cocal do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Concórdia"
            ],
            [
                "uf" => "SC",
                "city" => "Cordilheira Alta"
            ],
            [
                "uf" => "SC",
                "city" => "Coronel Freitas"
            ],
            [
                "uf" => "SC",
                "city" => "Coronel Martins"
            ],
            [
                "uf" => "SC",
                "city" => "Corupá"
            ],
            [
                "uf" => "SC",
                "city" => "Correia Pinto"
            ],
            [
                "uf" => "SC",
                "city" => "Criciúma"
            ],
            [
                "uf" => "SC",
                "city" => "Cunha Porã"
            ],
            [
                "uf" => "SC",
                "city" => "Cunhataí"
            ],
            [
                "uf" => "SC",
                "city" => "Curitibanos"
            ],
            [
                "uf" => "SC",
                "city" => "Descanso"
            ],
            [
                "uf" => "SC",
                "city" => "Dionísio Cerqueira"
            ],
            [
                "uf" => "SC",
                "city" => "Dona Emma"
            ],
            [
                "uf" => "SC",
                "city" => "Doutor Pedrinho"
            ],
            [
                "uf" => "SC",
                "city" => "Entre Rios"
            ],
            [
                "uf" => "SC",
                "city" => "Ermo"
            ],
            [
                "uf" => "SC",
                "city" => "Erval Velho"
            ],
            [
                "uf" => "SC",
                "city" => "Faxinal Dos Guedes"
            ],
            [
                "uf" => "SC",
                "city" => "Flor do Sertão"
            ],
            [
                "uf" => "SC",
                "city" => "Florianópolis"
            ],
            [
                "uf" => "SC",
                "city" => "Formosa do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Forquilhinha"
            ],
            [
                "uf" => "SC",
                "city" => "Fraiburgo"
            ],
            [
                "uf" => "SC",
                "city" => "Frei Rogério"
            ],
            [
                "uf" => "SC",
                "city" => "Galvão"
            ],
            [
                "uf" => "SC",
                "city" => "Garopaba"
            ],
            [
                "uf" => "SC",
                "city" => "Garuva"
            ],
            [
                "uf" => "SC",
                "city" => "Gaspar"
            ],
            [
                "uf" => "SC",
                "city" => "Governador Celso Ramos"
            ],
            [
                "uf" => "SC",
                "city" => "Grão Pará"
            ],
            [
                "uf" => "SC",
                "city" => "Gravatal"
            ],
            [
                "uf" => "SC",
                "city" => "Guabiruba"
            ],
            [
                "uf" => "SC",
                "city" => "Guaraciaba"
            ],
            [
                "uf" => "SC",
                "city" => "Guaramirim"
            ],
            [
                "uf" => "SC",
                "city" => "Guarujá do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Guatambú"
            ],
            [
                "uf" => "SC",
                "city" => "Herval D´oeste"
            ],
            [
                "uf" => "SC",
                "city" => "Ibiam"
            ],
            [
                "uf" => "SC",
                "city" => "Ibicaré"
            ],
            [
                "uf" => "SC",
                "city" => "Ibirama"
            ],
            [
                "uf" => "SC",
                "city" => "Içara"
            ],
            [
                "uf" => "SC",
                "city" => "Ilhota"
            ],
            [
                "uf" => "SC",
                "city" => "Imaruí"
            ],
            [
                "uf" => "SC",
                "city" => "Imbituba"
            ],
            [
                "uf" => "SC",
                "city" => "Imbuia"
            ],
            [
                "uf" => "SC",
                "city" => "Indaial"
            ],
            [
                "uf" => "SC",
                "city" => "Iomerê"
            ],
            [
                "uf" => "SC",
                "city" => "Ipira"
            ],
            [
                "uf" => "SC",
                "city" => "Iporã do Oeste"
            ],
            [
                "uf" => "SC",
                "city" => "Ipuaçu"
            ],
            [
                "uf" => "SC",
                "city" => "Ipumirim"
            ],
            [
                "uf" => "SC",
                "city" => "Iraceminha"
            ],
            [
                "uf" => "SC",
                "city" => "Irani"
            ],
            [
                "uf" => "SC",
                "city" => "Irati"
            ],
            [
                "uf" => "SC",
                "city" => "Irineópolis"
            ],
            [
                "uf" => "SC",
                "city" => "Itá"
            ],
            [
                "uf" => "SC",
                "city" => "Itaiópolis"
            ],
            [
                "uf" => "SC",
                "city" => "Itajaí"
            ],
            [
                "uf" => "SC",
                "city" => "Itapema"
            ],
            [
                "uf" => "SC",
                "city" => "Itapiranga"
            ],
            [
                "uf" => "SC",
                "city" => "Itapoá"
            ],
            [
                "uf" => "SC",
                "city" => "Ituporanga"
            ],
            [
                "uf" => "SC",
                "city" => "Jaborá"
            ],
            [
                "uf" => "SC",
                "city" => "Jacinto Machado"
            ],
            [
                "uf" => "SC",
                "city" => "Jaguaruna"
            ],
            [
                "uf" => "SC",
                "city" => "Jaraguá do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Jardinópolis"
            ],
            [
                "uf" => "SC",
                "city" => "Joaçaba"
            ],
            [
                "uf" => "SC",
                "city" => "Joinville"
            ],
            [
                "uf" => "SC",
                "city" => "José Boiteux"
            ],
            [
                "uf" => "SC",
                "city" => "Jupiá"
            ],
            [
                "uf" => "SC",
                "city" => "Lacerdópolis"
            ],
            [
                "uf" => "SC",
                "city" => "Lages"
            ],
            [
                "uf" => "SC",
                "city" => "Laguna"
            ],
            [
                "uf" => "SC",
                "city" => "Lajeado Grande"
            ],
            [
                "uf" => "SC",
                "city" => "Laurentino"
            ],
            [
                "uf" => "SC",
                "city" => "Lauro Muller"
            ],
            [
                "uf" => "SC",
                "city" => "Lebon Régis"
            ],
            [
                "uf" => "SC",
                "city" => "Leoberto Leal"
            ],
            [
                "uf" => "SC",
                "city" => "Lindóia do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Lontras"
            ],
            [
                "uf" => "SC",
                "city" => "Luiz Alves"
            ],
            [
                "uf" => "SC",
                "city" => "Luzerna"
            ],
            [
                "uf" => "SC",
                "city" => "Macieira"
            ],
            [
                "uf" => "SC",
                "city" => "Mafra"
            ],
            [
                "uf" => "SC",
                "city" => "Major Gercino"
            ],
            [
                "uf" => "SC",
                "city" => "Major Vieira"
            ],
            [
                "uf" => "SC",
                "city" => "Maracajá"
            ],
            [
                "uf" => "SC",
                "city" => "Maravilha"
            ],
            [
                "uf" => "SC",
                "city" => "Marema"
            ],
            [
                "uf" => "SC",
                "city" => "Massaranduba"
            ],
            [
                "uf" => "SC",
                "city" => "Matos Costa"
            ],
            [
                "uf" => "SC",
                "city" => "Meleiro"
            ],
            [
                "uf" => "SC",
                "city" => "Mirim Doce"
            ],
            [
                "uf" => "SC",
                "city" => "Modelo"
            ],
            [
                "uf" => "SC",
                "city" => "Mondaí"
            ],
            [
                "uf" => "SC",
                "city" => "Monte Carlo"
            ],
            [
                "uf" => "SC",
                "city" => "Monte Castelo"
            ],
            [
                "uf" => "SC",
                "city" => "Morro da Fumaça"
            ],
            [
                "uf" => "SC",
                "city" => "Morro Grande"
            ],
            [
                "uf" => "SC",
                "city" => "Navegantes"
            ],
            [
                "uf" => "SC",
                "city" => "Nova Erechim"
            ],
            [
                "uf" => "SC",
                "city" => "Nova Itaberaba"
            ],
            [
                "uf" => "SC",
                "city" => "Nova Trento"
            ],
            [
                "uf" => "SC",
                "city" => "Nova Veneza"
            ],
            [
                "uf" => "SC",
                "city" => "Novo Horizonte"
            ],
            [
                "uf" => "SC",
                "city" => "Orleans"
            ],
            [
                "uf" => "SC",
                "city" => "Otacílio Costa"
            ],
            [
                "uf" => "SC",
                "city" => "Ouro"
            ],
            [
                "uf" => "SC",
                "city" => "Ouro Verde"
            ],
            [
                "uf" => "SC",
                "city" => "Paial"
            ],
            [
                "uf" => "SC",
                "city" => "Painel"
            ],
            [
                "uf" => "SC",
                "city" => "Palhoça"
            ],
            [
                "uf" => "SC",
                "city" => "Palma Sola"
            ],
            [
                "uf" => "SC",
                "city" => "Palmeira"
            ],
            [
                "uf" => "SC",
                "city" => "Palmitos"
            ],
            [
                "uf" => "SC",
                "city" => "Papanduva"
            ],
            [
                "uf" => "SC",
                "city" => "Paraíso"
            ],
            [
                "uf" => "SC",
                "city" => "Passo de Torres"
            ],
            [
                "uf" => "SC",
                "city" => "Passos Maia"
            ],
            [
                "uf" => "SC",
                "city" => "Paulo Lopes"
            ],
            [
                "uf" => "SC",
                "city" => "Pedras Grandes"
            ],
            [
                "uf" => "SC",
                "city" => "Penha"
            ],
            [
                "uf" => "SC",
                "city" => "Peritiba"
            ],
            [
                "uf" => "SC",
                "city" => "Pescaria Brava"
            ],
            [
                "uf" => "SC",
                "city" => "Petrolândia"
            ],
            [
                "uf" => "SC",
                "city" => "Piçarras"
            ],
            [
                "uf" => "SC",
                "city" => "Pinhalzinho"
            ],
            [
                "uf" => "SC",
                "city" => "Pinheiro Preto"
            ],
            [
                "uf" => "SC",
                "city" => "Piratuba"
            ],
            [
                "uf" => "SC",
                "city" => "Planalto Alegre"
            ],
            [
                "uf" => "SC",
                "city" => "Pomerode"
            ],
            [
                "uf" => "SC",
                "city" => "Ponte Alta"
            ],
            [
                "uf" => "SC",
                "city" => "Ponte Alta do Norte"
            ],
            [
                "uf" => "SC",
                "city" => "Ponte Serrada"
            ],
            [
                "uf" => "SC",
                "city" => "Porto Belo"
            ],
            [
                "uf" => "SC",
                "city" => "Porto União"
            ],
            [
                "uf" => "SC",
                "city" => "Pouso Redondo"
            ],
            [
                "uf" => "SC",
                "city" => "Praia Grande"
            ],
            [
                "uf" => "SC",
                "city" => "Presidente Castelo Branco"
            ],
            [
                "uf" => "SC",
                "city" => "Presidente Getúlio"
            ],
            [
                "uf" => "SC",
                "city" => "Presidente Nereu"
            ],
            [
                "uf" => "SC",
                "city" => "Princesa"
            ],
            [
                "uf" => "SC",
                "city" => "Quilombo"
            ],
            [
                "uf" => "SC",
                "city" => "Rancho Queimado"
            ],
            [
                "uf" => "SC",
                "city" => "Rio Das Antas"
            ],
            [
                "uf" => "SC",
                "city" => "Rio do Campo"
            ],
            [
                "uf" => "SC",
                "city" => "Rio do Oeste"
            ],
            [
                "uf" => "SC",
                "city" => "Rio Dos Cedros"
            ],
            [
                "uf" => "SC",
                "city" => "Rio do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Rio Fortuna"
            ],
            [
                "uf" => "SC",
                "city" => "Rio Negrinho"
            ],
            [
                "uf" => "SC",
                "city" => "Rio Rufino"
            ],
            [
                "uf" => "SC",
                "city" => "Riqueza"
            ],
            [
                "uf" => "SC",
                "city" => "Rodeio"
            ],
            [
                "uf" => "SC",
                "city" => "Romelândia"
            ],
            [
                "uf" => "SC",
                "city" => "Salete"
            ],
            [
                "uf" => "SC",
                "city" => "Saltinho"
            ],
            [
                "uf" => "SC",
                "city" => "Salto Veloso"
            ],
            [
                "uf" => "SC",
                "city" => "Sangão"
            ],
            [
                "uf" => "SC",
                "city" => "Santa Cecília"
            ],
            [
                "uf" => "SC",
                "city" => "Santa Helena"
            ],
            [
                "uf" => "SC",
                "city" => "Santa Rosa de Lima"
            ],
            [
                "uf" => "SC",
                "city" => "Santa Rosa do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Santa Terezinha"
            ],
            [
                "uf" => "SC",
                "city" => "Santa Terezinha do Progresso"
            ],
            [
                "uf" => "SC",
                "city" => "Santiago do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Santo Amaro da Imperatriz"
            ],
            [
                "uf" => "SC",
                "city" => "São Bernardino"
            ],
            [
                "uf" => "SC",
                "city" => "São Bento do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "São Bonifácio"
            ],
            [
                "uf" => "SC",
                "city" => "São Carlos"
            ],
            [
                "uf" => "SC",
                "city" => "São Cristovão do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "São Domingos"
            ],
            [
                "uf" => "SC",
                "city" => "São Francisco do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "São João do Oeste"
            ],
            [
                "uf" => "SC",
                "city" => "São João Batista"
            ],
            [
                "uf" => "SC",
                "city" => "São João do Itaperiú"
            ],
            [
                "uf" => "SC",
                "city" => "São João do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "São Joaquim"
            ],
            [
                "uf" => "SC",
                "city" => "São José"
            ],
            [
                "uf" => "SC",
                "city" => "São José do Cedro"
            ],
            [
                "uf" => "SC",
                "city" => "São José do Cerrito"
            ],
            [
                "uf" => "SC",
                "city" => "São Lourenço do Oeste"
            ],
            [
                "uf" => "SC",
                "city" => "São Ludgero"
            ],
            [
                "uf" => "SC",
                "city" => "São Martinho"
            ],
            [
                "uf" => "SC",
                "city" => "São Miguel da Boa Vista"
            ],
            [
                "uf" => "SC",
                "city" => "São Miguel do Oeste"
            ],
            [
                "uf" => "SC",
                "city" => "São Pedro de Alcântara"
            ],
            [
                "uf" => "SC",
                "city" => "Saudades"
            ],
            [
                "uf" => "SC",
                "city" => "Schroeder"
            ],
            [
                "uf" => "SC",
                "city" => "Seara"
            ],
            [
                "uf" => "SC",
                "city" => "Serra Alta"
            ],
            [
                "uf" => "SC",
                "city" => "Siderópolis"
            ],
            [
                "uf" => "SC",
                "city" => "Sombrio"
            ],
            [
                "uf" => "SC",
                "city" => "Sul Brasil"
            ],
            [
                "uf" => "SC",
                "city" => "Taió"
            ],
            [
                "uf" => "SC",
                "city" => "Tangará"
            ],
            [
                "uf" => "SC",
                "city" => "Tigrinhos"
            ],
            [
                "uf" => "SC",
                "city" => "Tijucas"
            ],
            [
                "uf" => "SC",
                "city" => "Timbé do Sul"
            ],
            [
                "uf" => "SC",
                "city" => "Timbó"
            ],
            [
                "uf" => "SC",
                "city" => "Timbó Grande"
            ],
            [
                "uf" => "SC",
                "city" => "Três Barras"
            ],
            [
                "uf" => "SC",
                "city" => "Treviso"
            ],
            [
                "uf" => "SC",
                "city" => "Treze de Maio"
            ],
            [
                "uf" => "SC",
                "city" => "Treze Tílias"
            ],
            [
                "uf" => "SC",
                "city" => "Trombudo Central"
            ],
            [
                "uf" => "SC",
                "city" => "Tubarão"
            ],
            [
                "uf" => "SC",
                "city" => "Tunápolis"
            ],
            [
                "uf" => "SC",
                "city" => "Turvo"
            ],
            [
                "uf" => "SC",
                "city" => "União do Oeste"
            ],
            [
                "uf" => "SC",
                "city" => "Urubici"
            ],
            [
                "uf" => "SC",
                "city" => "Urupema"
            ],
            [
                "uf" => "SC",
                "city" => "Urussanga"
            ],
            [
                "uf" => "SC",
                "city" => "Vargeão"
            ],
            [
                "uf" => "SC",
                "city" => "Vargem"
            ],
            [
                "uf" => "SC",
                "city" => "Vargem Bonita"
            ],
            [
                "uf" => "SC",
                "city" => "Vidal Ramos"
            ],
            [
                "uf" => "SC",
                "city" => "Videira"
            ],
            [
                "uf" => "SC",
                "city" => "Vitor Meireles"
            ],
            [
                "uf" => "SC",
                "city" => "Witmarsum"
            ],
            [
                "uf" => "SC",
                "city" => "Xanxerê"
            ],
            [
                "uf" => "SC",
                "city" => "Xavantina"
            ],
            [
                "uf" => "SC",
                "city" => "Xaxim"
            ],
            [
                "uf" => "SC",
                "city" => "Zortéa"
            ],
            [
                "uf" => "SC",
                "city" => "Balneário Rincão"
            ],
            [
                "uf" => "RS",
                "city" => "Aceguá"
            ],
            [
                "uf" => "RS",
                "city" => "Água Santa"
            ],
            [
                "uf" => "RS",
                "city" => "Agudo"
            ],
            [
                "uf" => "RS",
                "city" => "Ajuricaba"
            ],
            [
                "uf" => "RS",
                "city" => "Alecrim"
            ],
            [
                "uf" => "RS",
                "city" => "Alegrete"
            ],
            [
                "uf" => "RS",
                "city" => "Alegria"
            ],
            [
                "uf" => "RS",
                "city" => "Almirante Tamandaré do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Alpestre"
            ],
            [
                "uf" => "RS",
                "city" => "Alto Alegre"
            ],
            [
                "uf" => "RS",
                "city" => "Alto Feliz"
            ],
            [
                "uf" => "RS",
                "city" => "Alvorada"
            ],
            [
                "uf" => "RS",
                "city" => "Amaral Ferrador"
            ],
            [
                "uf" => "RS",
                "city" => "Ametista do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "André da Rocha"
            ],
            [
                "uf" => "RS",
                "city" => "Anta Gorda"
            ],
            [
                "uf" => "RS",
                "city" => "Antônio Prado"
            ],
            [
                "uf" => "RS",
                "city" => "Arambaré"
            ],
            [
                "uf" => "RS",
                "city" => "Araricá"
            ],
            [
                "uf" => "RS",
                "city" => "Aratiba"
            ],
            [
                "uf" => "RS",
                "city" => "Arroio do Meio"
            ],
            [
                "uf" => "RS",
                "city" => "Arroio do Sal"
            ],
            [
                "uf" => "RS",
                "city" => "Arroio do Padre"
            ],
            [
                "uf" => "RS",
                "city" => "Arroio Dos Ratos"
            ],
            [
                "uf" => "RS",
                "city" => "Arroio do Tigre"
            ],
            [
                "uf" => "RS",
                "city" => "Arroio Grande"
            ],
            [
                "uf" => "RS",
                "city" => "Arvorezinha"
            ],
            [
                "uf" => "RS",
                "city" => "Augusto Pestana"
            ],
            [
                "uf" => "RS",
                "city" => "Áurea"
            ],
            [
                "uf" => "RS",
                "city" => "Bagé"
            ],
            [
                "uf" => "RS",
                "city" => "Balneário Pinhal"
            ],
            [
                "uf" => "RS",
                "city" => "Barão"
            ],
            [
                "uf" => "RS",
                "city" => "Barão de Cotegipe"
            ],
            [
                "uf" => "RS",
                "city" => "Barão do Triunfo"
            ],
            [
                "uf" => "RS",
                "city" => "Barracão"
            ],
            [
                "uf" => "RS",
                "city" => "Barra do Guarita"
            ],
            [
                "uf" => "RS",
                "city" => "Barra do Quaraí"
            ],
            [
                "uf" => "RS",
                "city" => "Barra do Ribeiro"
            ],
            [
                "uf" => "RS",
                "city" => "Barra do Rio Azul"
            ],
            [
                "uf" => "RS",
                "city" => "Barra Funda"
            ],
            [
                "uf" => "RS",
                "city" => "Barros Cassal"
            ],
            [
                "uf" => "RS",
                "city" => "Benjamin Constant do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Bento Gonçalves"
            ],
            [
                "uf" => "RS",
                "city" => "Boa Vista Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Boa Vista do Buricá"
            ],
            [
                "uf" => "RS",
                "city" => "Boa Vista do Cadeado"
            ],
            [
                "uf" => "RS",
                "city" => "Boa Vista do Incra"
            ],
            [
                "uf" => "RS",
                "city" => "Boa Vista do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Bom Jesus"
            ],
            [
                "uf" => "RS",
                "city" => "Bom Princípio"
            ],
            [
                "uf" => "RS",
                "city" => "Bom Progresso"
            ],
            [
                "uf" => "RS",
                "city" => "Bom Retiro do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Boqueirão do Leão"
            ],
            [
                "uf" => "RS",
                "city" => "Bossoroca"
            ],
            [
                "uf" => "RS",
                "city" => "Bozano"
            ],
            [
                "uf" => "RS",
                "city" => "Braga"
            ],
            [
                "uf" => "RS",
                "city" => "Brochier"
            ],
            [
                "uf" => "RS",
                "city" => "Butiá"
            ],
            [
                "uf" => "RS",
                "city" => "Caçapava do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Cacequi"
            ],
            [
                "uf" => "RS",
                "city" => "Cachoeira do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Cachoeirinha"
            ],
            [
                "uf" => "RS",
                "city" => "Cacique Doble"
            ],
            [
                "uf" => "RS",
                "city" => "Caibaté"
            ],
            [
                "uf" => "RS",
                "city" => "Caiçara"
            ],
            [
                "uf" => "RS",
                "city" => "Camaquã"
            ],
            [
                "uf" => "RS",
                "city" => "Camargo"
            ],
            [
                "uf" => "RS",
                "city" => "Cambará do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Campestre da Serra"
            ],
            [
                "uf" => "RS",
                "city" => "Campina Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Campinas do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Campo Bom"
            ],
            [
                "uf" => "RS",
                "city" => "Campo Novo"
            ],
            [
                "uf" => "RS",
                "city" => "Campos Borges"
            ],
            [
                "uf" => "RS",
                "city" => "Candelária"
            ],
            [
                "uf" => "RS",
                "city" => "Cândido Godói"
            ],
            [
                "uf" => "RS",
                "city" => "Candiota"
            ],
            [
                "uf" => "RS",
                "city" => "Canela"
            ],
            [
                "uf" => "RS",
                "city" => "Canguçu"
            ],
            [
                "uf" => "RS",
                "city" => "Canoas"
            ],
            [
                "uf" => "RS",
                "city" => "Canudos do Vale"
            ],
            [
                "uf" => "RS",
                "city" => "Capão Bonito do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Capão da Canoa"
            ],
            [
                "uf" => "RS",
                "city" => "Capão do Cipó"
            ],
            [
                "uf" => "RS",
                "city" => "Capão do Leão"
            ],
            [
                "uf" => "RS",
                "city" => "Capivari do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Capela de Santana"
            ],
            [
                "uf" => "RS",
                "city" => "Capitão"
            ],
            [
                "uf" => "RS",
                "city" => "Carazinho"
            ],
            [
                "uf" => "RS",
                "city" => "Caraá"
            ],
            [
                "uf" => "RS",
                "city" => "Carlos Barbosa"
            ],
            [
                "uf" => "RS",
                "city" => "Carlos Gomes"
            ],
            [
                "uf" => "RS",
                "city" => "Casca"
            ],
            [
                "uf" => "RS",
                "city" => "Caseiros"
            ],
            [
                "uf" => "RS",
                "city" => "Catuípe"
            ],
            [
                "uf" => "RS",
                "city" => "Caxias do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Centenário"
            ],
            [
                "uf" => "RS",
                "city" => "Cerrito"
            ],
            [
                "uf" => "RS",
                "city" => "Cerro Branco"
            ],
            [
                "uf" => "RS",
                "city" => "Cerro Grande"
            ],
            [
                "uf" => "RS",
                "city" => "Cerro Grande do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Cerro Largo"
            ],
            [
                "uf" => "RS",
                "city" => "Chapada"
            ],
            [
                "uf" => "RS",
                "city" => "Charqueadas"
            ],
            [
                "uf" => "RS",
                "city" => "Charrua"
            ],
            [
                "uf" => "RS",
                "city" => "Chiapetta"
            ],
            [
                "uf" => "RS",
                "city" => "Chuí"
            ],
            [
                "uf" => "RS",
                "city" => "Chuvisca"
            ],
            [
                "uf" => "RS",
                "city" => "Cidreira"
            ],
            [
                "uf" => "RS",
                "city" => "Ciríaco"
            ],
            [
                "uf" => "RS",
                "city" => "Colinas"
            ],
            [
                "uf" => "RS",
                "city" => "Colorado"
            ],
            [
                "uf" => "RS",
                "city" => "Condor"
            ],
            [
                "uf" => "RS",
                "city" => "Constantina"
            ],
            [
                "uf" => "RS",
                "city" => "Coqueiro Baixo"
            ],
            [
                "uf" => "RS",
                "city" => "Coqueiros do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Coronel Barros"
            ],
            [
                "uf" => "RS",
                "city" => "Coronel Bicaco"
            ],
            [
                "uf" => "RS",
                "city" => "Coronel Pilar"
            ],
            [
                "uf" => "RS",
                "city" => "Cotiporã"
            ],
            [
                "uf" => "RS",
                "city" => "Coxilha"
            ],
            [
                "uf" => "RS",
                "city" => "Crissiumal"
            ],
            [
                "uf" => "RS",
                "city" => "Cristal"
            ],
            [
                "uf" => "RS",
                "city" => "Cristal do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Cruz Alta"
            ],
            [
                "uf" => "RS",
                "city" => "Cruzaltense"
            ],
            [
                "uf" => "RS",
                "city" => "Cruzeiro do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "David Canabarro"
            ],
            [
                "uf" => "RS",
                "city" => "Derrubadas"
            ],
            [
                "uf" => "RS",
                "city" => "Dezesseis de Novembro"
            ],
            [
                "uf" => "RS",
                "city" => "Dilermando de Aguiar"
            ],
            [
                "uf" => "RS",
                "city" => "Dois Irmãos"
            ],
            [
                "uf" => "RS",
                "city" => "Dois Irmãos Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Dois Lajeados"
            ],
            [
                "uf" => "RS",
                "city" => "Dom Feliciano"
            ],
            [
                "uf" => "RS",
                "city" => "Dom Pedro de Alcântara"
            ],
            [
                "uf" => "RS",
                "city" => "Dom Pedrito"
            ],
            [
                "uf" => "RS",
                "city" => "Dona Francisca"
            ],
            [
                "uf" => "RS",
                "city" => "Doutor Maurício Cardoso"
            ],
            [
                "uf" => "RS",
                "city" => "Doutor Ricardo"
            ],
            [
                "uf" => "RS",
                "city" => "Eldorado do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Encantado"
            ],
            [
                "uf" => "RS",
                "city" => "Encruzilhada do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Engenho Velho"
            ],
            [
                "uf" => "RS",
                "city" => "Entre-ijuís"
            ],
            [
                "uf" => "RS",
                "city" => "Entre Rios do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Erebango"
            ],
            [
                "uf" => "RS",
                "city" => "Erechim"
            ],
            [
                "uf" => "RS",
                "city" => "Ernestina"
            ],
            [
                "uf" => "RS",
                "city" => "Herval"
            ],
            [
                "uf" => "RS",
                "city" => "Erval Grande"
            ],
            [
                "uf" => "RS",
                "city" => "Erval Seco"
            ],
            [
                "uf" => "RS",
                "city" => "Esmeralda"
            ],
            [
                "uf" => "RS",
                "city" => "Esperança do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Espumoso"
            ],
            [
                "uf" => "RS",
                "city" => "Estação"
            ],
            [
                "uf" => "RS",
                "city" => "Estância Velha"
            ],
            [
                "uf" => "RS",
                "city" => "Esteio"
            ],
            [
                "uf" => "RS",
                "city" => "Estrela"
            ],
            [
                "uf" => "RS",
                "city" => "Estrela Velha"
            ],
            [
                "uf" => "RS",
                "city" => "Eugênio de Castro"
            ],
            [
                "uf" => "RS",
                "city" => "Fagundes Varela"
            ],
            [
                "uf" => "RS",
                "city" => "Farroupilha"
            ],
            [
                "uf" => "RS",
                "city" => "Faxinal do Soturno"
            ],
            [
                "uf" => "RS",
                "city" => "Faxinalzinho"
            ],
            [
                "uf" => "RS",
                "city" => "Fazenda Vilanova"
            ],
            [
                "uf" => "RS",
                "city" => "Feliz"
            ],
            [
                "uf" => "RS",
                "city" => "Flores da Cunha"
            ],
            [
                "uf" => "RS",
                "city" => "Floriano Peixoto"
            ],
            [
                "uf" => "RS",
                "city" => "Fontoura Xavier"
            ],
            [
                "uf" => "RS",
                "city" => "Formigueiro"
            ],
            [
                "uf" => "RS",
                "city" => "Forquetinha"
            ],
            [
                "uf" => "RS",
                "city" => "Fortaleza Dos Valos"
            ],
            [
                "uf" => "RS",
                "city" => "Frederico Westphalen"
            ],
            [
                "uf" => "RS",
                "city" => "Garibaldi"
            ],
            [
                "uf" => "RS",
                "city" => "Garruchos"
            ],
            [
                "uf" => "RS",
                "city" => "Gaurama"
            ],
            [
                "uf" => "RS",
                "city" => "General Câmara"
            ],
            [
                "uf" => "RS",
                "city" => "Gentil"
            ],
            [
                "uf" => "RS",
                "city" => "Getúlio Vargas"
            ],
            [
                "uf" => "RS",
                "city" => "Giruá"
            ],
            [
                "uf" => "RS",
                "city" => "Glorinha"
            ],
            [
                "uf" => "RS",
                "city" => "Gramado"
            ],
            [
                "uf" => "RS",
                "city" => "Gramado Dos Loureiros"
            ],
            [
                "uf" => "RS",
                "city" => "Gramado Xavier"
            ],
            [
                "uf" => "RS",
                "city" => "Gravataí"
            ],
            [
                "uf" => "RS",
                "city" => "Guabiju"
            ],
            [
                "uf" => "RS",
                "city" => "Guaíba"
            ],
            [
                "uf" => "RS",
                "city" => "Guaporé"
            ],
            [
                "uf" => "RS",
                "city" => "Guarani Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Harmonia"
            ],
            [
                "uf" => "RS",
                "city" => "Herveiras"
            ],
            [
                "uf" => "RS",
                "city" => "Horizontina"
            ],
            [
                "uf" => "RS",
                "city" => "Hulha Negra"
            ],
            [
                "uf" => "RS",
                "city" => "Humaitá"
            ],
            [
                "uf" => "RS",
                "city" => "Ibarama"
            ],
            [
                "uf" => "RS",
                "city" => "Ibiaçá"
            ],
            [
                "uf" => "RS",
                "city" => "Ibiraiaras"
            ],
            [
                "uf" => "RS",
                "city" => "Ibirapuitã"
            ],
            [
                "uf" => "RS",
                "city" => "Ibirubá"
            ],
            [
                "uf" => "RS",
                "city" => "Igrejinha"
            ],
            [
                "uf" => "RS",
                "city" => "Ijuí"
            ],
            [
                "uf" => "RS",
                "city" => "Ilópolis"
            ],
            [
                "uf" => "RS",
                "city" => "Imbé"
            ],
            [
                "uf" => "RS",
                "city" => "Imigrante"
            ],
            [
                "uf" => "RS",
                "city" => "Independência"
            ],
            [
                "uf" => "RS",
                "city" => "Inhacorá"
            ],
            [
                "uf" => "RS",
                "city" => "Ipê"
            ],
            [
                "uf" => "RS",
                "city" => "Ipiranga do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Iraí"
            ],
            [
                "uf" => "RS",
                "city" => "Itaara"
            ],
            [
                "uf" => "RS",
                "city" => "Itacurubi"
            ],
            [
                "uf" => "RS",
                "city" => "Itapuca"
            ],
            [
                "uf" => "RS",
                "city" => "Itaqui"
            ],
            [
                "uf" => "RS",
                "city" => "Itati"
            ],
            [
                "uf" => "RS",
                "city" => "Itatiba do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Ivorá"
            ],
            [
                "uf" => "RS",
                "city" => "Ivoti"
            ],
            [
                "uf" => "RS",
                "city" => "Jaboticaba"
            ],
            [
                "uf" => "RS",
                "city" => "Jacuizinho"
            ],
            [
                "uf" => "RS",
                "city" => "Jacutinga"
            ],
            [
                "uf" => "RS",
                "city" => "Jaguarão"
            ],
            [
                "uf" => "RS",
                "city" => "Jaguari"
            ],
            [
                "uf" => "RS",
                "city" => "Jaquirana"
            ],
            [
                "uf" => "RS",
                "city" => "Jari"
            ],
            [
                "uf" => "RS",
                "city" => "Jóia"
            ],
            [
                "uf" => "RS",
                "city" => "Júlio de Castilhos"
            ],
            [
                "uf" => "RS",
                "city" => "Lagoa Bonita do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Lagoão"
            ],
            [
                "uf" => "RS",
                "city" => "Lagoa Dos Três Cantos"
            ],
            [
                "uf" => "RS",
                "city" => "Lagoa Vermelha"
            ],
            [
                "uf" => "RS",
                "city" => "Lajeado"
            ],
            [
                "uf" => "RS",
                "city" => "Lajeado do Bugre"
            ],
            [
                "uf" => "RS",
                "city" => "Lavras do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Liberato Salzano"
            ],
            [
                "uf" => "RS",
                "city" => "Lindolfo Collor"
            ],
            [
                "uf" => "RS",
                "city" => "Linha Nova"
            ],
            [
                "uf" => "RS",
                "city" => "Machadinho"
            ],
            [
                "uf" => "RS",
                "city" => "Maçambara"
            ],
            [
                "uf" => "RS",
                "city" => "Mampituba"
            ],
            [
                "uf" => "RS",
                "city" => "Manoel Viana"
            ],
            [
                "uf" => "RS",
                "city" => "Maquiné"
            ],
            [
                "uf" => "RS",
                "city" => "Maratá"
            ],
            [
                "uf" => "RS",
                "city" => "Marau"
            ],
            [
                "uf" => "RS",
                "city" => "Marcelino Ramos"
            ],
            [
                "uf" => "RS",
                "city" => "Mariana Pimentel"
            ],
            [
                "uf" => "RS",
                "city" => "Mariano Moro"
            ],
            [
                "uf" => "RS",
                "city" => "Marques de Souza"
            ],
            [
                "uf" => "RS",
                "city" => "Mata"
            ],
            [
                "uf" => "RS",
                "city" => "Mato Castelhano"
            ],
            [
                "uf" => "RS",
                "city" => "Mato Leitão"
            ],
            [
                "uf" => "RS",
                "city" => "Mato Queimado"
            ],
            [
                "uf" => "RS",
                "city" => "Maximiliano de Almeida"
            ],
            [
                "uf" => "RS",
                "city" => "Minas do Leão"
            ],
            [
                "uf" => "RS",
                "city" => "Miraguaí"
            ],
            [
                "uf" => "RS",
                "city" => "Montauri"
            ],
            [
                "uf" => "RS",
                "city" => "Monte Alegre Dos Campos"
            ],
            [
                "uf" => "RS",
                "city" => "Monte Belo do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Montenegro"
            ],
            [
                "uf" => "RS",
                "city" => "Mormaço"
            ],
            [
                "uf" => "RS",
                "city" => "Morrinhos do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Morro Redondo"
            ],
            [
                "uf" => "RS",
                "city" => "Morro Reuter"
            ],
            [
                "uf" => "RS",
                "city" => "Mostardas"
            ],
            [
                "uf" => "RS",
                "city" => "Muçum"
            ],
            [
                "uf" => "RS",
                "city" => "Muitos Capões"
            ],
            [
                "uf" => "RS",
                "city" => "Muliterno"
            ],
            [
                "uf" => "RS",
                "city" => "Não-me-toque"
            ],
            [
                "uf" => "RS",
                "city" => "Nicolau Vergueiro"
            ],
            [
                "uf" => "RS",
                "city" => "Nonoai"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Alvorada"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Araçá"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Bassano"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Boa Vista"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Bréscia"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Candelária"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Esperança do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Hartz"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Pádua"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Palma"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Petrópolis"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Prata"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Ramada"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Roma do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Nova Santa Rita"
            ],
            [
                "uf" => "RS",
                "city" => "Novo Cabrais"
            ],
            [
                "uf" => "RS",
                "city" => "Novo Hamburgo"
            ],
            [
                "uf" => "RS",
                "city" => "Novo Machado"
            ],
            [
                "uf" => "RS",
                "city" => "Novo Tiradentes"
            ],
            [
                "uf" => "RS",
                "city" => "Novo Xingu"
            ],
            [
                "uf" => "RS",
                "city" => "Novo Barreiro"
            ],
            [
                "uf" => "RS",
                "city" => "Osório"
            ],
            [
                "uf" => "RS",
                "city" => "Paim Filho"
            ],
            [
                "uf" => "RS",
                "city" => "Palmares do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Palmeira Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Palmitinho"
            ],
            [
                "uf" => "RS",
                "city" => "Panambi"
            ],
            [
                "uf" => "RS",
                "city" => "Pantano Grande"
            ],
            [
                "uf" => "RS",
                "city" => "Paraí"
            ],
            [
                "uf" => "RS",
                "city" => "Paraíso do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Pareci Novo"
            ],
            [
                "uf" => "RS",
                "city" => "Parobé"
            ],
            [
                "uf" => "RS",
                "city" => "Passa Sete"
            ],
            [
                "uf" => "RS",
                "city" => "Passo do Sobrado"
            ],
            [
                "uf" => "RS",
                "city" => "Passo Fundo"
            ],
            [
                "uf" => "RS",
                "city" => "Paulo Bento"
            ],
            [
                "uf" => "RS",
                "city" => "Paverama"
            ],
            [
                "uf" => "RS",
                "city" => "Pedras Altas"
            ],
            [
                "uf" => "RS",
                "city" => "Pedro Osório"
            ],
            [
                "uf" => "RS",
                "city" => "Pejuçara"
            ],
            [
                "uf" => "RS",
                "city" => "Pelotas"
            ],
            [
                "uf" => "RS",
                "city" => "Picada Café"
            ],
            [
                "uf" => "RS",
                "city" => "Pinhal"
            ],
            [
                "uf" => "RS",
                "city" => "Pinhal da Serra"
            ],
            [
                "uf" => "RS",
                "city" => "Pinhal Grande"
            ],
            [
                "uf" => "RS",
                "city" => "Pinheirinho do Vale"
            ],
            [
                "uf" => "RS",
                "city" => "Pinheiro Machado"
            ],
            [
                "uf" => "RS",
                "city" => "Pinto Bandeira"
            ],
            [
                "uf" => "RS",
                "city" => "Pirapó"
            ],
            [
                "uf" => "RS",
                "city" => "Piratini"
            ],
            [
                "uf" => "RS",
                "city" => "Planalto"
            ],
            [
                "uf" => "RS",
                "city" => "Poço Das Antas"
            ],
            [
                "uf" => "RS",
                "city" => "Pontão"
            ],
            [
                "uf" => "RS",
                "city" => "Ponte Preta"
            ],
            [
                "uf" => "RS",
                "city" => "Portão"
            ],
            [
                "uf" => "RS",
                "city" => "Porto Alegre"
            ],
            [
                "uf" => "RS",
                "city" => "Porto Lucena"
            ],
            [
                "uf" => "RS",
                "city" => "Porto Mauá"
            ],
            [
                "uf" => "RS",
                "city" => "Porto Vera Cruz"
            ],
            [
                "uf" => "RS",
                "city" => "Porto Xavier"
            ],
            [
                "uf" => "RS",
                "city" => "Pouso Novo"
            ],
            [
                "uf" => "RS",
                "city" => "Presidente Lucena"
            ],
            [
                "uf" => "RS",
                "city" => "Progresso"
            ],
            [
                "uf" => "RS",
                "city" => "Protásio Alves"
            ],
            [
                "uf" => "RS",
                "city" => "Putinga"
            ],
            [
                "uf" => "RS",
                "city" => "Quaraí"
            ],
            [
                "uf" => "RS",
                "city" => "Quatro Irmãos"
            ],
            [
                "uf" => "RS",
                "city" => "Quevedos"
            ],
            [
                "uf" => "RS",
                "city" => "Quinze de Novembro"
            ],
            [
                "uf" => "RS",
                "city" => "Redentora"
            ],
            [
                "uf" => "RS",
                "city" => "Relvado"
            ],
            [
                "uf" => "RS",
                "city" => "Restinga Seca"
            ],
            [
                "uf" => "RS",
                "city" => "Rio Dos Índios"
            ],
            [
                "uf" => "RS",
                "city" => "Rio Grande"
            ],
            [
                "uf" => "RS",
                "city" => "Rio Pardo"
            ],
            [
                "uf" => "RS",
                "city" => "Riozinho"
            ],
            [
                "uf" => "RS",
                "city" => "Roca Sales"
            ],
            [
                "uf" => "RS",
                "city" => "Rodeio Bonito"
            ],
            [
                "uf" => "RS",
                "city" => "Rolador"
            ],
            [
                "uf" => "RS",
                "city" => "Rolante"
            ],
            [
                "uf" => "RS",
                "city" => "Ronda Alta"
            ],
            [
                "uf" => "RS",
                "city" => "Rondinha"
            ],
            [
                "uf" => "RS",
                "city" => "Roque Gonzales"
            ],
            [
                "uf" => "RS",
                "city" => "Rosário do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Sagrada Família"
            ],
            [
                "uf" => "RS",
                "city" => "Saldanha Marinho"
            ],
            [
                "uf" => "RS",
                "city" => "Salto do Jacuí"
            ],
            [
                "uf" => "RS",
                "city" => "Salvador Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Salvador do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Sananduva"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Bárbara do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Cecília do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Clara do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Cruz do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Maria"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Maria do Herval"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Margarida do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Santana da Boa Vista"
            ],
            [
                "uf" => "RS",
                "city" => "Santana do Livramento"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Rosa"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Tereza"
            ],
            [
                "uf" => "RS",
                "city" => "Santa Vitória do Palmar"
            ],
            [
                "uf" => "RS",
                "city" => "Santiago"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Ângelo"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Antônio do Palma"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Antônio da Patrulha"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Antônio Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Antônio do Planalto"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Augusto"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Cristo"
            ],
            [
                "uf" => "RS",
                "city" => "Santo Expedito do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "São Borja"
            ],
            [
                "uf" => "RS",
                "city" => "São Domingos do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "São Francisco de Assis"
            ],
            [
                "uf" => "RS",
                "city" => "São Francisco de Paula"
            ],
            [
                "uf" => "RS",
                "city" => "São Gabriel"
            ],
            [
                "uf" => "RS",
                "city" => "São Jerônimo"
            ],
            [
                "uf" => "RS",
                "city" => "São João da Urtiga"
            ],
            [
                "uf" => "RS",
                "city" => "São João do Polêsine"
            ],
            [
                "uf" => "RS",
                "city" => "São Jorge"
            ],
            [
                "uf" => "RS",
                "city" => "São José Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "São José do Herval"
            ],
            [
                "uf" => "RS",
                "city" => "São José do Hortêncio"
            ],
            [
                "uf" => "RS",
                "city" => "São José do Inhacorá"
            ],
            [
                "uf" => "RS",
                "city" => "São José do Norte"
            ],
            [
                "uf" => "RS",
                "city" => "São José do Ouro"
            ],
            [
                "uf" => "RS",
                "city" => "São José do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "São José Dos Ausentes"
            ],
            [
                "uf" => "RS",
                "city" => "São Leopoldo"
            ],
            [
                "uf" => "RS",
                "city" => "São Lourenço do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "São Luiz Gonzaga"
            ],
            [
                "uf" => "RS",
                "city" => "São Marcos"
            ],
            [
                "uf" => "RS",
                "city" => "São Martinho"
            ],
            [
                "uf" => "RS",
                "city" => "São Martinho da Serra"
            ],
            [
                "uf" => "RS",
                "city" => "São Miguel Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "São Nicolau"
            ],
            [
                "uf" => "RS",
                "city" => "São Paulo Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "São Pedro da Serra"
            ],
            [
                "uf" => "RS",
                "city" => "São Pedro Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "São Pedro do Butiá"
            ],
            [
                "uf" => "RS",
                "city" => "São Pedro do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "São Sebastião do Caí"
            ],
            [
                "uf" => "RS",
                "city" => "São Sepé"
            ],
            [
                "uf" => "RS",
                "city" => "São Valentim"
            ],
            [
                "uf" => "RS",
                "city" => "São Valentim do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "São Valério do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "São Vendelino"
            ],
            [
                "uf" => "RS",
                "city" => "São Vicente do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Sapiranga"
            ],
            [
                "uf" => "RS",
                "city" => "Sapucaia do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Sarandi"
            ],
            [
                "uf" => "RS",
                "city" => "Seberi"
            ],
            [
                "uf" => "RS",
                "city" => "Sede Nova"
            ],
            [
                "uf" => "RS",
                "city" => "Segredo"
            ],
            [
                "uf" => "RS",
                "city" => "Selbach"
            ],
            [
                "uf" => "RS",
                "city" => "Senador Salgado Filho"
            ],
            [
                "uf" => "RS",
                "city" => "Sentinela do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Serafina Corrêa"
            ],
            [
                "uf" => "RS",
                "city" => "Sério"
            ],
            [
                "uf" => "RS",
                "city" => "Sertão"
            ],
            [
                "uf" => "RS",
                "city" => "Sertão Santana"
            ],
            [
                "uf" => "RS",
                "city" => "Sete de Setembro"
            ],
            [
                "uf" => "RS",
                "city" => "Severiano de Almeida"
            ],
            [
                "uf" => "RS",
                "city" => "Silveira Martins"
            ],
            [
                "uf" => "RS",
                "city" => "Sinimbu"
            ],
            [
                "uf" => "RS",
                "city" => "Sobradinho"
            ],
            [
                "uf" => "RS",
                "city" => "Soledade"
            ],
            [
                "uf" => "RS",
                "city" => "Tabaí"
            ],
            [
                "uf" => "RS",
                "city" => "Tapejara"
            ],
            [
                "uf" => "RS",
                "city" => "Tapera"
            ],
            [
                "uf" => "RS",
                "city" => "Tapes"
            ],
            [
                "uf" => "RS",
                "city" => "Taquara"
            ],
            [
                "uf" => "RS",
                "city" => "Taquari"
            ],
            [
                "uf" => "RS",
                "city" => "Taquaruçu do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Tavares"
            ],
            [
                "uf" => "RS",
                "city" => "Tenente Portela"
            ],
            [
                "uf" => "RS",
                "city" => "Terra de Areia"
            ],
            [
                "uf" => "RS",
                "city" => "Teutônia"
            ],
            [
                "uf" => "RS",
                "city" => "Tio Hugo"
            ],
            [
                "uf" => "RS",
                "city" => "Tiradentes do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Toropi"
            ],
            [
                "uf" => "RS",
                "city" => "Torres"
            ],
            [
                "uf" => "RS",
                "city" => "Tramandaí"
            ],
            [
                "uf" => "RS",
                "city" => "Travesseiro"
            ],
            [
                "uf" => "RS",
                "city" => "Três Arroios"
            ],
            [
                "uf" => "RS",
                "city" => "Três Cachoeiras"
            ],
            [
                "uf" => "RS",
                "city" => "Três Coroas"
            ],
            [
                "uf" => "RS",
                "city" => "Três de Maio"
            ],
            [
                "uf" => "RS",
                "city" => "Três Forquilhas"
            ],
            [
                "uf" => "RS",
                "city" => "Três Palmeiras"
            ],
            [
                "uf" => "RS",
                "city" => "Três Passos"
            ],
            [
                "uf" => "RS",
                "city" => "Trindade do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Triunfo"
            ],
            [
                "uf" => "RS",
                "city" => "Tucunduva"
            ],
            [
                "uf" => "RS",
                "city" => "Tunas"
            ],
            [
                "uf" => "RS",
                "city" => "Tupanci do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Tupanciretã"
            ],
            [
                "uf" => "RS",
                "city" => "Tupandi"
            ],
            [
                "uf" => "RS",
                "city" => "Tuparendi"
            ],
            [
                "uf" => "RS",
                "city" => "Turuçu"
            ],
            [
                "uf" => "RS",
                "city" => "Ubiretama"
            ],
            [
                "uf" => "RS",
                "city" => "União da Serra"
            ],
            [
                "uf" => "RS",
                "city" => "Unistalda"
            ],
            [
                "uf" => "RS",
                "city" => "Uruguaiana"
            ],
            [
                "uf" => "RS",
                "city" => "Vacaria"
            ],
            [
                "uf" => "RS",
                "city" => "Vale Verde"
            ],
            [
                "uf" => "RS",
                "city" => "Vale do Sol"
            ],
            [
                "uf" => "RS",
                "city" => "Vale Real"
            ],
            [
                "uf" => "RS",
                "city" => "Vanini"
            ],
            [
                "uf" => "RS",
                "city" => "Venâncio Aires"
            ],
            [
                "uf" => "RS",
                "city" => "Vera Cruz"
            ],
            [
                "uf" => "RS",
                "city" => "Veranópolis"
            ],
            [
                "uf" => "RS",
                "city" => "Vespasiano Correa"
            ],
            [
                "uf" => "RS",
                "city" => "Viadutos"
            ],
            [
                "uf" => "RS",
                "city" => "Viamão"
            ],
            [
                "uf" => "RS",
                "city" => "Vicente Dutra"
            ],
            [
                "uf" => "RS",
                "city" => "Victor Graeff"
            ],
            [
                "uf" => "RS",
                "city" => "Vila Flores"
            ],
            [
                "uf" => "RS",
                "city" => "Vila Lângaro"
            ],
            [
                "uf" => "RS",
                "city" => "Vila Maria"
            ],
            [
                "uf" => "RS",
                "city" => "Vila Nova do Sul"
            ],
            [
                "uf" => "RS",
                "city" => "Vista Alegre"
            ],
            [
                "uf" => "RS",
                "city" => "Vista Alegre do Prata"
            ],
            [
                "uf" => "RS",
                "city" => "Vista Gaúcha"
            ],
            [
                "uf" => "RS",
                "city" => "Vitória Das Missões"
            ],
            [
                "uf" => "RS",
                "city" => "Westfalia"
            ],
            [
                "uf" => "RS",
                "city" => "Xangri-lá"
            ],
            [
                "uf" => "MS",
                "city" => "Água Clara"
            ],
            [
                "uf" => "MS",
                "city" => "Alcinópolis"
            ],
            [
                "uf" => "MS",
                "city" => "Amambaí"
            ],
            [
                "uf" => "MS",
                "city" => "Anastácio"
            ],
            [
                "uf" => "MS",
                "city" => "Anaurilândia"
            ],
            [
                "uf" => "MS",
                "city" => "Angélica"
            ],
            [
                "uf" => "MS",
                "city" => "Antônio João"
            ],
            [
                "uf" => "MS",
                "city" => "Aparecida do Taboado"
            ],
            [
                "uf" => "MS",
                "city" => "Aquidauana"
            ],
            [
                "uf" => "MS",
                "city" => "Aral Moreira"
            ],
            [
                "uf" => "MS",
                "city" => "Bandeirantes"
            ],
            [
                "uf" => "MS",
                "city" => "Bataguassu"
            ],
            [
                "uf" => "MS",
                "city" => "Batayporã"
            ],
            [
                "uf" => "MS",
                "city" => "Bela Vista"
            ],
            [
                "uf" => "MS",
                "city" => "Bodoquena"
            ],
            [
                "uf" => "MS",
                "city" => "Bonito"
            ],
            [
                "uf" => "MS",
                "city" => "Brasilândia"
            ],
            [
                "uf" => "MS",
                "city" => "Caarapó"
            ],
            [
                "uf" => "MS",
                "city" => "Camapuã"
            ],
            [
                "uf" => "MS",
                "city" => "Campo Grande"
            ],
            [
                "uf" => "MS",
                "city" => "Caracol"
            ],
            [
                "uf" => "MS",
                "city" => "Cassilândia"
            ],
            [
                "uf" => "MS",
                "city" => "Chapadão do Sul"
            ],
            [
                "uf" => "MS",
                "city" => "Corguinho"
            ],
            [
                "uf" => "MS",
                "city" => "Coronel Sapucaia"
            ],
            [
                "uf" => "MS",
                "city" => "Corumbá"
            ],
            [
                "uf" => "MS",
                "city" => "Costa Rica"
            ],
            [
                "uf" => "MS",
                "city" => "Coxim"
            ],
            [
                "uf" => "MS",
                "city" => "Deodápolis"
            ],
            [
                "uf" => "MS",
                "city" => "Dois Irmãos do Buriti"
            ],
            [
                "uf" => "MS",
                "city" => "Douradina"
            ],
            [
                "uf" => "MS",
                "city" => "Dourados"
            ],
            [
                "uf" => "MS",
                "city" => "Eldorado"
            ],
            [
                "uf" => "MS",
                "city" => "Fátima do Sul"
            ],
            [
                "uf" => "MS",
                "city" => "Figueirão"
            ],
            [
                "uf" => "MS",
                "city" => "Glória de Dourados"
            ],
            [
                "uf" => "MS",
                "city" => "Guia Lopes da Laguna"
            ],
            [
                "uf" => "MS",
                "city" => "Iguatemi"
            ],
            [
                "uf" => "MS",
                "city" => "Inocência"
            ],
            [
                "uf" => "MS",
                "city" => "Itaporã"
            ],
            [
                "uf" => "MS",
                "city" => "Itaquiraí"
            ],
            [
                "uf" => "MS",
                "city" => "Ivinhema"
            ],
            [
                "uf" => "MS",
                "city" => "Japorã"
            ],
            [
                "uf" => "MS",
                "city" => "Jaraguari"
            ],
            [
                "uf" => "MS",
                "city" => "Jardim"
            ],
            [
                "uf" => "MS",
                "city" => "Jateí"
            ],
            [
                "uf" => "MS",
                "city" => "Juti"
            ],
            [
                "uf" => "MS",
                "city" => "Ladário"
            ],
            [
                "uf" => "MS",
                "city" => "Laguna Carapã"
            ],
            [
                "uf" => "MS",
                "city" => "Maracaju"
            ],
            [
                "uf" => "MS",
                "city" => "Miranda"
            ],
            [
                "uf" => "MS",
                "city" => "Mundo Novo"
            ],
            [
                "uf" => "MS",
                "city" => "Naviraí"
            ],
            [
                "uf" => "MS",
                "city" => "Nioaque"
            ],
            [
                "uf" => "MS",
                "city" => "Nova Alvorada do Sul"
            ],
            [
                "uf" => "MS",
                "city" => "Nova Andradina"
            ],
            [
                "uf" => "MS",
                "city" => "Novo Horizonte do Sul"
            ],
            [
                "uf" => "MS",
                "city" => "Paraíso das Águas"
            ],
            [
                "uf" => "MS",
                "city" => "Paranaíba"
            ],
            [
                "uf" => "MS",
                "city" => "Paranhos"
            ],
            [
                "uf" => "MS",
                "city" => "Pedro Gomes"
            ],
            [
                "uf" => "MS",
                "city" => "Ponta Porã"
            ],
            [
                "uf" => "MS",
                "city" => "Porto Murtinho"
            ],
            [
                "uf" => "MS",
                "city" => "Ribas do Rio Pardo"
            ],
            [
                "uf" => "MS",
                "city" => "Rio Brilhante"
            ],
            [
                "uf" => "MS",
                "city" => "Rio Negro"
            ],
            [
                "uf" => "MS",
                "city" => "Rio Verde de Mato Grosso"
            ],
            [
                "uf" => "MS",
                "city" => "Rochedo"
            ],
            [
                "uf" => "MS",
                "city" => "Santa Rita do Pardo"
            ],
            [
                "uf" => "MS",
                "city" => "São Gabriel do Oeste"
            ],
            [
                "uf" => "MS",
                "city" => "Sete Quedas"
            ],
            [
                "uf" => "MS",
                "city" => "Selvíria"
            ],
            [
                "uf" => "MS",
                "city" => "Sidrolândia"
            ],
            [
                "uf" => "MS",
                "city" => "Sonora"
            ],
            [
                "uf" => "MS",
                "city" => "Tacuru"
            ],
            [
                "uf" => "MS",
                "city" => "Taquarussu"
            ],
            [
                "uf" => "MS",
                "city" => "Terenos"
            ],
            [
                "uf" => "MS",
                "city" => "Três Lagoas"
            ],
            [
                "uf" => "MS",
                "city" => "Vicentina"
            ],
            [
                "uf" => "MT",
                "city" => "Acorizal"
            ],
            [
                "uf" => "MT",
                "city" => "Água Boa"
            ],
            [
                "uf" => "MT",
                "city" => "Alta Floresta"
            ],
            [
                "uf" => "MT",
                "city" => "Alto Araguaia"
            ],
            [
                "uf" => "MT",
                "city" => "Alto Boa Vista"
            ],
            [
                "uf" => "MT",
                "city" => "Alto Garças"
            ],
            [
                "uf" => "MT",
                "city" => "Alto Paraguai"
            ],
            [
                "uf" => "MT",
                "city" => "Alto Taquari"
            ],
            [
                "uf" => "MT",
                "city" => "Apiacás"
            ],
            [
                "uf" => "MT",
                "city" => "Araguaiana"
            ],
            [
                "uf" => "MT",
                "city" => "Araguainha"
            ],
            [
                "uf" => "MT",
                "city" => "Araputanga"
            ],
            [
                "uf" => "MT",
                "city" => "Arenápolis"
            ],
            [
                "uf" => "MT",
                "city" => "Aripuanã"
            ],
            [
                "uf" => "MT",
                "city" => "Barão de Melgaço"
            ],
            [
                "uf" => "MT",
                "city" => "Barra do Bugres"
            ],
            [
                "uf" => "MT",
                "city" => "Barra do Garças"
            ],
            [
                "uf" => "MT",
                "city" => "Bom Jesus do Araguaia"
            ],
            [
                "uf" => "MT",
                "city" => "Brasnorte"
            ],
            [
                "uf" => "MT",
                "city" => "Cáceres"
            ],
            [
                "uf" => "MT",
                "city" => "Campinápolis"
            ],
            [
                "uf" => "MT",
                "city" => "Campo Novo do Parecis"
            ],
            [
                "uf" => "MT",
                "city" => "Campo Verde"
            ],
            [
                "uf" => "MT",
                "city" => "Campos de Júlio"
            ],
            [
                "uf" => "MT",
                "city" => "Canabrava do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "Canarana"
            ],
            [
                "uf" => "MT",
                "city" => "Carlinda"
            ],
            [
                "uf" => "MT",
                "city" => "Castanheira"
            ],
            [
                "uf" => "MT",
                "city" => "Chapada Dos Guimarães"
            ],
            [
                "uf" => "MT",
                "city" => "Cláudia"
            ],
            [
                "uf" => "MT",
                "city" => "Cocalinho"
            ],
            [
                "uf" => "MT",
                "city" => "Colíder"
            ],
            [
                "uf" => "MT",
                "city" => "Colniza"
            ],
            [
                "uf" => "MT",
                "city" => "Comodoro"
            ],
            [
                "uf" => "MT",
                "city" => "Confresa"
            ],
            [
                "uf" => "MT",
                "city" => "Conquista D´oeste"
            ],
            [
                "uf" => "MT",
                "city" => "Cotriguaçu"
            ],
            [
                "uf" => "MT",
                "city" => "Cuiabá"
            ],
            [
                "uf" => "MT",
                "city" => "Curvelândia"
            ],
            [
                "uf" => "MT",
                "city" => "Denise"
            ],
            [
                "uf" => "MT",
                "city" => "Diamantino"
            ],
            [
                "uf" => "MT",
                "city" => "Dom Aquino"
            ],
            [
                "uf" => "MT",
                "city" => "Feliz Natal"
            ],
            [
                "uf" => "MT",
                "city" => "Figueirópolis D´oeste"
            ],
            [
                "uf" => "MT",
                "city" => "Gaúcha do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "General Carneiro"
            ],
            [
                "uf" => "MT",
                "city" => "Glória D´oeste"
            ],
            [
                "uf" => "MT",
                "city" => "Guarantã do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "Guiratinga"
            ],
            [
                "uf" => "MT",
                "city" => "Indiavaí"
            ],
            [
                "uf" => "MT",
                "city" => "Ipiranga do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "Itanhangá"
            ],
            [
                "uf" => "MT",
                "city" => "Itaúba"
            ],
            [
                "uf" => "MT",
                "city" => "Itiquira"
            ],
            [
                "uf" => "MT",
                "city" => "Jaciara"
            ],
            [
                "uf" => "MT",
                "city" => "Jangada"
            ],
            [
                "uf" => "MT",
                "city" => "Jauru"
            ],
            [
                "uf" => "MT",
                "city" => "Juara"
            ],
            [
                "uf" => "MT",
                "city" => "Juína"
            ],
            [
                "uf" => "MT",
                "city" => "Juruena"
            ],
            [
                "uf" => "MT",
                "city" => "Juscimeira"
            ],
            [
                "uf" => "MT",
                "city" => "Lambari D´oeste"
            ],
            [
                "uf" => "MT",
                "city" => "Lucas do Rio Verde"
            ],
            [
                "uf" => "MT",
                "city" => "Luciára"
            ],
            [
                "uf" => "MT",
                "city" => "Vila Bela da Santíssima Trindade"
            ],
            [
                "uf" => "MT",
                "city" => "Marcelândia"
            ],
            [
                "uf" => "MT",
                "city" => "Matupá"
            ],
            [
                "uf" => "MT",
                "city" => "Mirassol D´oeste"
            ],
            [
                "uf" => "MT",
                "city" => "Nobres"
            ],
            [
                "uf" => "MT",
                "city" => "Nortelândia"
            ],
            [
                "uf" => "MT",
                "city" => "Nossa Senhora do Livramento"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Bandeirantes"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Nazaré"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Lacerda"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Santa Helena"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Brasilândia"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Canaã do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Mutum"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Olímpia"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Ubiratã"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Xavantina"
            ],
            [
                "uf" => "MT",
                "city" => "Novo Mundo"
            ],
            [
                "uf" => "MT",
                "city" => "Novo Horizonte do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "Novo São Joaquim"
            ],
            [
                "uf" => "MT",
                "city" => "Paranaíta"
            ],
            [
                "uf" => "MT",
                "city" => "Paranatinga"
            ],
            [
                "uf" => "MT",
                "city" => "Novo Santo Antônio"
            ],
            [
                "uf" => "MT",
                "city" => "Pedra Preta"
            ],
            [
                "uf" => "MT",
                "city" => "Peixoto de Azevedo"
            ],
            [
                "uf" => "MT",
                "city" => "Planalto da Serra"
            ],
            [
                "uf" => "MT",
                "city" => "Poconé"
            ],
            [
                "uf" => "MT",
                "city" => "Pontal do Araguaia"
            ],
            [
                "uf" => "MT",
                "city" => "Ponte Branca"
            ],
            [
                "uf" => "MT",
                "city" => "Pontes e Lacerda"
            ],
            [
                "uf" => "MT",
                "city" => "Porto Alegre do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "Porto Dos Gaúchos"
            ],
            [
                "uf" => "MT",
                "city" => "Porto Esperidião"
            ],
            [
                "uf" => "MT",
                "city" => "Porto Estrela"
            ],
            [
                "uf" => "MT",
                "city" => "Poxoréo"
            ],
            [
                "uf" => "MT",
                "city" => "Primavera do Leste"
            ],
            [
                "uf" => "MT",
                "city" => "Querência"
            ],
            [
                "uf" => "MT",
                "city" => "São José Dos Quatro Marcos"
            ],
            [
                "uf" => "MT",
                "city" => "Reserva do Cabaçal"
            ],
            [
                "uf" => "MT",
                "city" => "Ribeirão Cascalheira"
            ],
            [
                "uf" => "MT",
                "city" => "Ribeirãozinho"
            ],
            [
                "uf" => "MT",
                "city" => "Rio Branco"
            ],
            [
                "uf" => "MT",
                "city" => "Santa Carmem"
            ],
            [
                "uf" => "MT",
                "city" => "Santo Afonso"
            ],
            [
                "uf" => "MT",
                "city" => "São José do Povo"
            ],
            [
                "uf" => "MT",
                "city" => "São José do Rio Claro"
            ],
            [
                "uf" => "MT",
                "city" => "São José do Xingu"
            ],
            [
                "uf" => "MT",
                "city" => "São Pedro da Cipa"
            ],
            [
                "uf" => "MT",
                "city" => "Rondolândia"
            ],
            [
                "uf" => "MT",
                "city" => "Rondonópolis"
            ],
            [
                "uf" => "MT",
                "city" => "Rosário Oeste"
            ],
            [
                "uf" => "MT",
                "city" => "Santa Cruz do Xingu"
            ],
            [
                "uf" => "MT",
                "city" => "Salto do Céu"
            ],
            [
                "uf" => "MT",
                "city" => "Santa Rita do Trivelato"
            ],
            [
                "uf" => "MT",
                "city" => "Santa Terezinha"
            ],
            [
                "uf" => "MT",
                "city" => "Santo Antônio do Leste"
            ],
            [
                "uf" => "MT",
                "city" => "Santo Antônio do Leverger"
            ],
            [
                "uf" => "MT",
                "city" => "São Félix do Araguaia"
            ],
            [
                "uf" => "MT",
                "city" => "Sapezal"
            ],
            [
                "uf" => "MT",
                "city" => "Serra Nova Dourada"
            ],
            [
                "uf" => "MT",
                "city" => "Sinop"
            ],
            [
                "uf" => "MT",
                "city" => "Sorriso"
            ],
            [
                "uf" => "MT",
                "city" => "Tabaporã"
            ],
            [
                "uf" => "MT",
                "city" => "Tangará da Serra"
            ],
            [
                "uf" => "MT",
                "city" => "Tapurah"
            ],
            [
                "uf" => "MT",
                "city" => "Terra Nova do Norte"
            ],
            [
                "uf" => "MT",
                "city" => "Tesouro"
            ],
            [
                "uf" => "MT",
                "city" => "Torixoréu"
            ],
            [
                "uf" => "MT",
                "city" => "União do Sul"
            ],
            [
                "uf" => "MT",
                "city" => "Vale de São Domingos"
            ],
            [
                "uf" => "MT",
                "city" => "Várzea Grande"
            ],
            [
                "uf" => "MT",
                "city" => "Vera"
            ],
            [
                "uf" => "MT",
                "city" => "Vila Rica"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Guarita"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Marilândia"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Maringá"
            ],
            [
                "uf" => "MT",
                "city" => "Nova Monte Verde"
            ],
            [
                "uf" => "GO",
                "city" => "Abadia de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Abadiânia"
            ],
            [
                "uf" => "GO",
                "city" => "Acreúna"
            ],
            [
                "uf" => "GO",
                "city" => "Adelândia"
            ],
            [
                "uf" => "GO",
                "city" => "Água Fria de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Água Limpa"
            ],
            [
                "uf" => "GO",
                "city" => "Águas Lindas de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Alexânia"
            ],
            [
                "uf" => "GO",
                "city" => "Aloândia"
            ],
            [
                "uf" => "GO",
                "city" => "Alto Horizonte"
            ],
            [
                "uf" => "GO",
                "city" => "Alto Paraíso de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Alvorada do Norte"
            ],
            [
                "uf" => "GO",
                "city" => "Amaralina"
            ],
            [
                "uf" => "GO",
                "city" => "Americano do Brasil"
            ],
            [
                "uf" => "GO",
                "city" => "Amorinópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Anápolis"
            ],
            [
                "uf" => "GO",
                "city" => "Anhanguera"
            ],
            [
                "uf" => "GO",
                "city" => "Anicuns"
            ],
            [
                "uf" => "GO",
                "city" => "Aparecida de Goiânia"
            ],
            [
                "uf" => "GO",
                "city" => "Aparecida do Rio Doce"
            ],
            [
                "uf" => "GO",
                "city" => "Aporé"
            ],
            [
                "uf" => "GO",
                "city" => "Araçu"
            ],
            [
                "uf" => "GO",
                "city" => "Aragarças"
            ],
            [
                "uf" => "GO",
                "city" => "Aragoiânia"
            ],
            [
                "uf" => "GO",
                "city" => "Araguapaz"
            ],
            [
                "uf" => "GO",
                "city" => "Arenópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Aruanã"
            ],
            [
                "uf" => "GO",
                "city" => "Aurilândia"
            ],
            [
                "uf" => "GO",
                "city" => "Avelinópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Baliza"
            ],
            [
                "uf" => "GO",
                "city" => "Barro Alto"
            ],
            [
                "uf" => "GO",
                "city" => "Bela Vista de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Bom Jardim de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Bom Jesus de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Bonfinópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Bonópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Brazabrantes"
            ],
            [
                "uf" => "GO",
                "city" => "Britânia"
            ],
            [
                "uf" => "GO",
                "city" => "Buriti Alegre"
            ],
            [
                "uf" => "GO",
                "city" => "Buriti de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Buritinópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Cabeceiras"
            ],
            [
                "uf" => "GO",
                "city" => "Cachoeira Alta"
            ],
            [
                "uf" => "GO",
                "city" => "Cachoeira de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Cachoeira Dourada"
            ],
            [
                "uf" => "GO",
                "city" => "Caçu"
            ],
            [
                "uf" => "GO",
                "city" => "Caiapônia"
            ],
            [
                "uf" => "GO",
                "city" => "Caldas Novas"
            ],
            [
                "uf" => "GO",
                "city" => "Caldazinha"
            ],
            [
                "uf" => "GO",
                "city" => "Campestre de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Campinaçu"
            ],
            [
                "uf" => "GO",
                "city" => "Campinorte"
            ],
            [
                "uf" => "GO",
                "city" => "Campo Alegre de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Campo Limpo de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Campos Belos"
            ],
            [
                "uf" => "GO",
                "city" => "Campos Verdes"
            ],
            [
                "uf" => "GO",
                "city" => "Carmo do Rio Verde"
            ],
            [
                "uf" => "GO",
                "city" => "Castelândia"
            ],
            [
                "uf" => "GO",
                "city" => "Catalão"
            ],
            [
                "uf" => "GO",
                "city" => "Caturaí"
            ],
            [
                "uf" => "GO",
                "city" => "Cavalcante"
            ],
            [
                "uf" => "GO",
                "city" => "Ceres"
            ],
            [
                "uf" => "GO",
                "city" => "Cezarina"
            ],
            [
                "uf" => "GO",
                "city" => "Chapadão do Céu"
            ],
            [
                "uf" => "GO",
                "city" => "Cidade Ocidental"
            ],
            [
                "uf" => "GO",
                "city" => "Cocalzinho de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Colinas do Sul"
            ],
            [
                "uf" => "GO",
                "city" => "Córrego do Ouro"
            ],
            [
                "uf" => "GO",
                "city" => "Corumbá de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Corumbaíba"
            ],
            [
                "uf" => "GO",
                "city" => "Cristalina"
            ],
            [
                "uf" => "GO",
                "city" => "Cristianópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Crixás"
            ],
            [
                "uf" => "GO",
                "city" => "Cromínia"
            ],
            [
                "uf" => "GO",
                "city" => "Cumari"
            ],
            [
                "uf" => "GO",
                "city" => "Damianópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Damolândia"
            ],
            [
                "uf" => "GO",
                "city" => "Davinópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Diorama"
            ],
            [
                "uf" => "GO",
                "city" => "Doverlândia"
            ],
            [
                "uf" => "GO",
                "city" => "Edealina"
            ],
            [
                "uf" => "GO",
                "city" => "Edéia"
            ],
            [
                "uf" => "GO",
                "city" => "Estrela do Norte"
            ],
            [
                "uf" => "GO",
                "city" => "Faina"
            ],
            [
                "uf" => "GO",
                "city" => "Fazenda Nova"
            ],
            [
                "uf" => "GO",
                "city" => "Firminópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Flores de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Formosa"
            ],
            [
                "uf" => "GO",
                "city" => "Formoso"
            ],
            [
                "uf" => "GO",
                "city" => "Gameleira de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Divinópolis de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Goianápolis"
            ],
            [
                "uf" => "GO",
                "city" => "Goiandira"
            ],
            [
                "uf" => "GO",
                "city" => "Goianésia"
            ],
            [
                "uf" => "GO",
                "city" => "Goiânia"
            ],
            [
                "uf" => "GO",
                "city" => "Goianira"
            ],
            [
                "uf" => "GO",
                "city" => "Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Goiatuba"
            ],
            [
                "uf" => "GO",
                "city" => "Gouvelândia"
            ],
            [
                "uf" => "GO",
                "city" => "Guapó"
            ],
            [
                "uf" => "GO",
                "city" => "Guaraíta"
            ],
            [
                "uf" => "GO",
                "city" => "Guarani de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Guarinos"
            ],
            [
                "uf" => "GO",
                "city" => "Heitoraí"
            ],
            [
                "uf" => "GO",
                "city" => "Hidrolândia"
            ],
            [
                "uf" => "GO",
                "city" => "Hidrolina"
            ],
            [
                "uf" => "GO",
                "city" => "Iaciara"
            ],
            [
                "uf" => "GO",
                "city" => "Inaciolândia"
            ],
            [
                "uf" => "GO",
                "city" => "Indiara"
            ],
            [
                "uf" => "GO",
                "city" => "Inhumas"
            ],
            [
                "uf" => "GO",
                "city" => "Ipameri"
            ],
            [
                "uf" => "GO",
                "city" => "Ipiranga de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Iporá"
            ],
            [
                "uf" => "GO",
                "city" => "Israelândia"
            ],
            [
                "uf" => "GO",
                "city" => "Itaberaí"
            ],
            [
                "uf" => "GO",
                "city" => "Itaguari"
            ],
            [
                "uf" => "GO",
                "city" => "Itaguaru"
            ],
            [
                "uf" => "GO",
                "city" => "Itajá"
            ],
            [
                "uf" => "GO",
                "city" => "Itapaci"
            ],
            [
                "uf" => "GO",
                "city" => "Itapirapuã"
            ],
            [
                "uf" => "GO",
                "city" => "Itapuranga"
            ],
            [
                "uf" => "GO",
                "city" => "Itarumã"
            ],
            [
                "uf" => "GO",
                "city" => "Itauçu"
            ],
            [
                "uf" => "GO",
                "city" => "Itumbiara"
            ],
            [
                "uf" => "GO",
                "city" => "Ivolândia"
            ],
            [
                "uf" => "GO",
                "city" => "Jandaia"
            ],
            [
                "uf" => "GO",
                "city" => "Jaraguá"
            ],
            [
                "uf" => "GO",
                "city" => "Jataí"
            ],
            [
                "uf" => "GO",
                "city" => "Jaupaci"
            ],
            [
                "uf" => "GO",
                "city" => "Jesúpolis"
            ],
            [
                "uf" => "GO",
                "city" => "Joviânia"
            ],
            [
                "uf" => "GO",
                "city" => "Jussara"
            ],
            [
                "uf" => "GO",
                "city" => "Lagoa Santa"
            ],
            [
                "uf" => "GO",
                "city" => "Leopoldo de Bulhões"
            ],
            [
                "uf" => "GO",
                "city" => "Luziânia"
            ],
            [
                "uf" => "GO",
                "city" => "Mairipotaba"
            ],
            [
                "uf" => "GO",
                "city" => "Mambaí"
            ],
            [
                "uf" => "GO",
                "city" => "Mara Rosa"
            ],
            [
                "uf" => "GO",
                "city" => "Marzagão"
            ],
            [
                "uf" => "GO",
                "city" => "Matrinchã"
            ],
            [
                "uf" => "GO",
                "city" => "Maurilândia"
            ],
            [
                "uf" => "GO",
                "city" => "Mimoso de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Minaçu"
            ],
            [
                "uf" => "GO",
                "city" => "Mineiros"
            ],
            [
                "uf" => "GO",
                "city" => "Moiporá"
            ],
            [
                "uf" => "GO",
                "city" => "Monte Alegre de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Montes Claros de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Montividiu"
            ],
            [
                "uf" => "GO",
                "city" => "Montividiu do Norte"
            ],
            [
                "uf" => "GO",
                "city" => "Morrinhos"
            ],
            [
                "uf" => "GO",
                "city" => "Morro Agudo de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Mossâmedes"
            ],
            [
                "uf" => "GO",
                "city" => "Mozarlândia"
            ],
            [
                "uf" => "GO",
                "city" => "Mundo Novo"
            ],
            [
                "uf" => "GO",
                "city" => "Mutunópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Nazário"
            ],
            [
                "uf" => "GO",
                "city" => "Nerópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Niquelândia"
            ],
            [
                "uf" => "GO",
                "city" => "Nova América"
            ],
            [
                "uf" => "GO",
                "city" => "Nova Aurora"
            ],
            [
                "uf" => "GO",
                "city" => "Nova Crixás"
            ],
            [
                "uf" => "GO",
                "city" => "Nova Glória"
            ],
            [
                "uf" => "GO",
                "city" => "Nova Iguaçu de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Nova Roma"
            ],
            [
                "uf" => "GO",
                "city" => "Nova Veneza"
            ],
            [
                "uf" => "GO",
                "city" => "Novo Brasil"
            ],
            [
                "uf" => "GO",
                "city" => "Novo Gama"
            ],
            [
                "uf" => "GO",
                "city" => "Novo Planalto"
            ],
            [
                "uf" => "GO",
                "city" => "Orizona"
            ],
            [
                "uf" => "GO",
                "city" => "Ouro Verde de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Ouvidor"
            ],
            [
                "uf" => "GO",
                "city" => "Padre Bernardo"
            ],
            [
                "uf" => "GO",
                "city" => "Palestina de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Palmeiras de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Palmelo"
            ],
            [
                "uf" => "GO",
                "city" => "Palminópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Panamá"
            ],
            [
                "uf" => "GO",
                "city" => "Paranaiguara"
            ],
            [
                "uf" => "GO",
                "city" => "Paraúna"
            ],
            [
                "uf" => "GO",
                "city" => "Perolândia"
            ],
            [
                "uf" => "GO",
                "city" => "Petrolina de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Pilar de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Piracanjuba"
            ],
            [
                "uf" => "GO",
                "city" => "Piranhas"
            ],
            [
                "uf" => "GO",
                "city" => "Pirenópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Pires do Rio"
            ],
            [
                "uf" => "GO",
                "city" => "Planaltina"
            ],
            [
                "uf" => "GO",
                "city" => "Pontalina"
            ],
            [
                "uf" => "GO",
                "city" => "Porangatu"
            ],
            [
                "uf" => "GO",
                "city" => "Porteirão"
            ],
            [
                "uf" => "GO",
                "city" => "Portelândia"
            ],
            [
                "uf" => "GO",
                "city" => "Posse"
            ],
            [
                "uf" => "GO",
                "city" => "Professor Jamil"
            ],
            [
                "uf" => "GO",
                "city" => "Quirinópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Rialma"
            ],
            [
                "uf" => "GO",
                "city" => "Rianápolis"
            ],
            [
                "uf" => "GO",
                "city" => "Rio Quente"
            ],
            [
                "uf" => "GO",
                "city" => "Rio Verde"
            ],
            [
                "uf" => "GO",
                "city" => "Rubiataba"
            ],
            [
                "uf" => "GO",
                "city" => "Sanclerlândia"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Bárbara de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Cruz de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santa fé de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Helena de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Isabel"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Rita do Araguaia"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Rita do Novo Destino"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Rosa de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Tereza de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santa Terezinha de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santo Antônio da Barra"
            ],
            [
                "uf" => "GO",
                "city" => "Santo Antônio de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Santo Antônio do Descoberto"
            ],
            [
                "uf" => "GO",
                "city" => "São Domingos"
            ],
            [
                "uf" => "GO",
                "city" => "São Francisco de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "São João D´aliança"
            ],
            [
                "uf" => "GO",
                "city" => "São João da Paraúna"
            ],
            [
                "uf" => "GO",
                "city" => "São Luís de Montes Belos"
            ],
            [
                "uf" => "GO",
                "city" => "São Luíz do Norte"
            ],
            [
                "uf" => "GO",
                "city" => "São Miguel do Araguaia"
            ],
            [
                "uf" => "GO",
                "city" => "São Miguel do Passa Quatro"
            ],
            [
                "uf" => "GO",
                "city" => "São Patrício"
            ],
            [
                "uf" => "GO",
                "city" => "São Simão"
            ],
            [
                "uf" => "GO",
                "city" => "Senador Canedo"
            ],
            [
                "uf" => "GO",
                "city" => "Serranópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Silvânia"
            ],
            [
                "uf" => "GO",
                "city" => "Simolândia"
            ],
            [
                "uf" => "GO",
                "city" => "Sítio D´abadia"
            ],
            [
                "uf" => "GO",
                "city" => "Taquaral de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Teresina de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Terezópolis de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Três Ranchos"
            ],
            [
                "uf" => "GO",
                "city" => "Trindade"
            ],
            [
                "uf" => "GO",
                "city" => "Trombas"
            ],
            [
                "uf" => "GO",
                "city" => "Turvânia"
            ],
            [
                "uf" => "GO",
                "city" => "Turvelândia"
            ],
            [
                "uf" => "GO",
                "city" => "Uirapuru"
            ],
            [
                "uf" => "GO",
                "city" => "Uruaçu"
            ],
            [
                "uf" => "GO",
                "city" => "Uruana"
            ],
            [
                "uf" => "GO",
                "city" => "Urutaí"
            ],
            [
                "uf" => "GO",
                "city" => "Valparaíso de Goiás"
            ],
            [
                "uf" => "GO",
                "city" => "Varjão"
            ],
            [
                "uf" => "GO",
                "city" => "Vianópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Vicentinópolis"
            ],
            [
                "uf" => "GO",
                "city" => "Vila Boa"
            ],
            [
                "uf" => "GO",
                "city" => "Vila Propício"
            ],
            [
                "uf" => "DF",
                "city" => "Brasília"
            ]
        ];

        foreach ($cities as $city) {

            $city["state_id"] = State::where('uf', $city["uf"])->first()->id;
            $city['slug'] = Str::slug($city["city"]);

            City::create([
                'name' => $city["city"],
                'state_id' => $city["state_id"],
                'slug' => $city['slug']
            ]);
        }
    }
}
