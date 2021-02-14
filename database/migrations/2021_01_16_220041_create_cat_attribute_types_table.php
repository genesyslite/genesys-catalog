<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCatAttributeTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_attribute_types', function (Blueprint $table) {
            $table->string('id')->primray();
            $table->boolean('active');
            $table->string('description');
        });
        DB::table('cat_attribute_types')->insert([
            ['id' => '3001', 'active' => true, 'description' => 'Detracciones: Recursos Hidrobiológicos-Matrícula de la embarcación'],
            ['id' => '3002', 'active' => true, 'description' => 'Detracciones: Recursos Hidrobiológicos-Nombre de la embarcación'],
            ['id' => '3003', 'active' => true, 'description' => 'Detracciones: Recursos Hidrobiológicos-Tipo de especie vendida'],
            ['id' => '3004', 'active' => true, 'description' => 'Detracciones: Recursos Hidrobiológicos-Lugar de descarga'],
            ['id' => '3005', 'active' => true, 'description' => 'Detracciones: Recursos Hidrobiológicos-Fecha de descarga'],
            ['id' => '3006', 'active' => true, 'description' => 'Detracciones: Recursos Hidrobiológicos-Cantidad de especie vendida'],
            ['id' => '3050', 'active' => true, 'description' => 'Transportre Terreste - Número de asiento'],
            ['id' => '3051', 'active' => true, 'description' => 'Transporte Terrestre - Información de manifiesto de pasajeros'],
            ['id' => '3052', 'active' => true, 'description' => 'Transporte Terrestre - Número de documento de identidad del pasajero'],
            ['id' => '3053', 'active' => true, 'description' => 'Transporte Terrestre - Tipo de documento de identidad del pasajero'],
            ['id' => '3054', 'active' => true, 'description' => 'Transporte Terrestre - Nombres y apellidos del pasajero'],
            ['id' => '3055', 'active' => true, 'description' => 'Transporte Terrestre - Ciudad o lugar de destino - Ubigeo'],
            ['id' => '3056', 'active' => true, 'description' => 'Transporte Terrestre - Ciudad o lugar de destino - Dirección detallada'],
            ['id' => '3057', 'active' => true, 'description' => 'Transporte Terrestre - Ciudad o lugar de origen - Ubigeo'],
            ['id' => '3058', 'active' => true, 'description' => 'Transporte Terrestre - Ciudad o lugar de origen - Dirección detallada'],
            ['id' => '3059', 'active' => true, 'description' => 'Transporte Terrestre - Fecha de inicio programado'],
            ['id' => '3060', 'active' => true, 'description' => 'Transporte Terrestre - Hora de inicio programado'],
            ['id' => '4000', 'active' => true, 'description' => 'Beneficio Hospedajes-Paquete turístico: Código de país de emisión del pasaporte'],
            ['id' => '4001', 'active' => true, 'description' => 'Beneficio Hospedajes: Código de país de residencia del sujeto no domiciliado'],
            ['id' => '4002', 'active' => true, 'description' => 'Beneficio Hospedajes: Fecha de ingreso al país'],
            ['id' => '4003', 'active' => true, 'description' => 'Beneficio Hospedajes: Fecha de Ingreso al Establecimiento'],
            ['id' => '4004', 'active' => true, 'description' => 'Beneficio Hospedajes: Fecha de Salida del Establecimiento'],
            ['id' => '4005', 'active' => true, 'description' => 'Beneficio Hospedajes: Número de Días de Permanencia'],
            ['id' => '4006', 'active' => true, 'description' => 'Beneficio Hospedajes: Fecha de Consumo'],
            ['id' => '4007', 'active' => true, 'description' => 'Beneficio Hospedajes-Paquete turístico: Nombres y apellidos del huesped'],
            ['id' => '4008', 'active' => true, 'description' => 'Beneficio Hospedajes-Paquete turístico: Tipo de documento de identidad del huesped'],
            ['id' => '4009', 'active' => true, 'description' => 'Beneficio Hospedajes-Paquete turístico: Número de documento de identidad del huesped'],
            ['id' => '4030', 'active' => true, 'description' => 'Carta Porte Aéreo:  Lugar de origen - Código de ubigeo'],
            ['id' => '4031', 'active' => true, 'description' => 'Carta Porte Aéreo:  Lugar de origen - Dirección detallada'],
            ['id' => '4032', 'active' => true, 'description' => 'Carta Porte Aéreo:  Lugar de destino - Código de ubigeo'],
            ['id' => '4033', 'active' => true, 'description' => 'Carta Porte Aéreo:  Lugar de destino - Dirección detallada'],
            ['id' => '4040', 'active' => true, 'description' => 'BVME transporte ferroviario: Pasajero - Apellidos y Nombres'],
            ['id' => '4041', 'active' => true, 'description' => 'BVME transporte ferroviario: Pasajero - Tipo de documento de identidad'],
            ['id' => '4042', 'active' => true, 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de origen - Código de ubigeo'],
            ['id' => '4043', 'active' => true, 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de origen - Dirección detallada'],
            ['id' => '4044', 'active' => true, 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de destino - Código de ubigeo'],
            ['id' => '4045', 'active' => true, 'description' => 'BVME transporte ferroviario: Servicio transporte: Ciudad o lugar de destino - Dirección detallada'],
            ['id' => '4046', 'active' => true, 'description' => 'BVME transporte ferroviario: Servicio transporte:Número de asiento'],
            ['id' => '4047', 'active' => true, 'description' => 'BVME transporte ferroviario: Servicio transporte: Hora programada de inicio de viaje'],
            ['id' => '4048', 'active' => true, 'description' => 'BVME transporte ferroviario: Servicio transporte: Fecha programada de inicio de viaje'],
            ['id' => '4049', 'active' => true, 'description' => 'BVME transporte ferroviario: Pasajero - Número de documento de identidad'],
            ['id' => '4060', 'active' => true, 'description' => 'Regalía Petrolera: Decreto Supremo de aprobación del contrato'],
            ['id' => '4061', 'active' => true, 'description' => 'Regalía Petrolera: Area de contrato (Lote)'],
            ['id' => '4062', 'active' => true, 'description' => 'Regalía Petrolera: Periodo de pago - Fecha de inicio'],
            ['id' => '4063', 'active' => true, 'description' => 'Regalía Petrolera: Periodo de pago - Fecha de fin'],
            ['id' => '4064', 'active' => true, 'description' => 'Regalía Petrolera: Fecha de Pago'],
            ['id' => '5000', 'active' => true, 'description' => 'Proveedores Estado: Número de Expediente'],
            ['id' => '5001', 'active' => true, 'description' => 'Proveedores Estado: Código de Unidad Ejecutora'],
            ['id' => '5002', 'active' => true, 'description' => 'Proveedores Estado: N° de Proceso de Selección'],
            ['id' => '5003', 'active' => true, 'description' => 'Proveedores Estado: N° de Contrato'],
            ['id' => '5010', 'active' => true, 'description' => 'Numero de Placa'],
            ['id' => '5011', 'active' => true, 'description' => 'Categoria'],
            ['id' => '5012', 'active' => true, 'description' => 'Marca'],
            ['id' => '5013', 'active' => true, 'description' => 'Modelo'],
            ['id' => '5014', 'active' => true, 'description' => 'Color'],
            ['id' => '5015', 'active' => true, 'description' => 'Motor'],
            ['id' => '5016', 'active' => true, 'description' => 'Combustible'],
            ['id' => '5017', 'active' => true, 'description' => 'Form. Rodante'],
            ['id' => '5018', 'active' => true, 'description' => 'VIN'],
            ['id' => '5019', 'active' => true, 'description' => 'Serie/Chasis'],
            ['id' => '5020', 'active' => true, 'description' => 'Año fabricacion'],
            ['id' => '5021', 'active' => true, 'description' => 'Año modelo'],
            ['id' => '5022', 'active' => true, 'description' => 'Version'],
            ['id' => '5023', 'active' => true, 'description' => 'Ejes'],
            ['id' => '5024', 'active' => true, 'description' => 'Asientos'],
            ['id' => '5025', 'active' => true, 'description' => 'Pasajeros'],
            ['id' => '5026', 'active' => true, 'description' => 'Ruedas'],
            ['id' => '5027', 'active' => true, 'description' => 'Carroceria'],
            ['id' => '5028', 'active' => true, 'description' => 'Potencia'],
            ['id' => '5029', 'active' => true, 'description' => 'Cilindros'],
            ['id' => '5030', 'active' => true, 'description' => 'Ciliindrada'],
            ['id' => '5031', 'active' => true, 'description' => 'Peso Bruto'],
            ['id' => '5032', 'active' => true, 'description' => 'Peso Neto'],
            ['id' => '5033', 'active' => true, 'description' => 'Carga Util'],
            ['id' => '5034', 'active' => true, 'description' => 'Longitud'],
            ['id' => '5035', 'active' => true, 'description' => 'Altura'],
            ['id' => '5036', 'active' => true, 'description' => 'Ancho'],
            ['id' => '6000', 'active' => true, 'description' => 'Comercialización de Oro:  Código Unico Concesión Minera'],
            ['id' => '6001', 'active' => true, 'description' => 'Comercialización de Oro:  N° declaración compromiso'],
            ['id' => '6002', 'active' => true, 'description' => 'Comercialización de Oro:  N° Reg. Especial .Comerci. Oro'],
            ['id' => '6003', 'active' => true, 'description' => 'Comercialización de Oro:  N° Resolución que autoriza Planta de Beneficio'],
            ['id' => '6004', 'active' => true, 'description' => 'Comercialización de Oro: Ley Mineral (% concent. oro)'],
            ['id' => '7000', 'active' => true, 'description' => 'Gastos Art. 37 Renta:  Número de Placa'],
            ['id' => '7001', 'active' => true, 'description' => 'Créditos Hipotecarios: Tipo de préstamo'],
            ['id' => '7002', 'active' => true, 'description' => 'Créditos Hipotecarios: Indicador de Primera Vivienda'],
            ['id' => '7003', 'active' => true, 'description' => 'Créditos Hipotecarios: Partida Registral'],
            ['id' => '7004', 'active' => true, 'description' => 'Créditos Hipotecarios: Número de contrato'],
            ['id' => '7005', 'active' => true, 'description' => 'Créditos Hipotecarios: Fecha de otorgamiento del crédito'],
            ['id' => '7006', 'active' => true, 'description' => 'Créditos Hipotecarios: Dirección del predio - Código de ubigeo'],
            ['id' => '7007', 'active' => true, 'description' => 'Créditos Hipotecarios: Dirección del predio - Dirección completa'],
            ['id' => '7008', 'active' => true, 'description' => 'Créditos Hipotecarios: Dirección del predio - Urbanización'],
            ['id' => '7009', 'active' => true, 'description' => 'Créditos Hipotecarios: Dirección del predio - Provincia'],
            ['id' => '7010', 'active' => true, 'description' => 'Créditos Hipotecarios: Dirección del predio - Distrito'],
            ['id' => '7011', 'active' => true, 'description' => 'Créditos Hipotecarios: Dirección del predio - Departamento'],
            ['id' => '7020', 'active' => true, 'description' => 'Partida Arancelaria'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_attribute_types');
    }
}
