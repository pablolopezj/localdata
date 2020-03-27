<?php

namespace App\Exports;

use App\Models\tareasEnDigital;
use Maatwebsite\Excel\Concerns\FromCollection;

class TareasEnDigitalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $results = tareasEnDigital::all();

        $data []= [
            'ID_Interno'     => 'ID_Interno',
            'Nombre' => 'Nombre',
            'Proyecto'    => 'Proyecto',
	        'Origen_Oportunidad'  => 'Origen_Oportunidad',
            'Business_Partner'     => 'Business_Partner',
            'Contacto'     => 'Contacto',
            'Email'     => 'Email',
            'Phone'     => 'Phone',
            'Sales_Order_EnDigital'     => 'Sales_Order_EnDigital',
            'Tipo_de_restriccion'     => 'Tipo_de_restriccion',
            'Fecha_de_inicio'     => 'Fecha_de_inicio',
            'Fecha_de_finalizacion'     => 'Fecha_de_finalizacion',
            'Associated_SKU'     => 'Associated_SKU',
            'Resource_Allocated'     => 'Resource_Allocated',
            '1_Cambio_adicional'     => '1_Cambio_adicional',
            '3_Cambios_adicionales'     => '3_Cambios_adicionales',
            'Google_my_business'     => 'Google_my_business',
            'Paqueteanimes'     => 'Paqueteanimes',
            'Supervisor_Asignado'     => 'Supervisor_Asignado',
            'Correo_profesional'     => 'Correo_profesional',
            'Video_anuncio'     => 'Video_anuncio',
            'Pestaña_adicional'     => 'Pestaña_adicional',
            'Dominio'     => 'Dominio',
            'Bloque_de_40_imgs_adicionales'     => 'Bloque_de_40_imgs_adicionales',
            'Alojamiento_por_anio'     => 'Alojamiento_por_anio',
            'Mi_negocio_impreso'     => 'Mi_negocio_impreso',
            'Facebook_Fanpage'     => 'Facebook_Fanpage',
            'Toppings_Comentarios'     => 'Toppings_Comentarios',
            'Change_is_because_of_a_mistake'     => 'Change_is_because_of_a_mistake',
            'Origen Oportunidad2'     => 'Origen Oportunidad2',
            'Line_of_Business'     => 'Line_of_Business',
            'Business_Name'     => 'Business_Name',
            'Slogan'     => 'Slogan',
            'Call_to_action'     => 'Call_to_action',
            'E-mail_for_Contact_Form'     => 'E-mail_for_Contact_Form',
            'Products_and_Services'     => 'Products_and_Services',
            'Benefits'     => 'Benefits',
            'Testimonials'     => 'Testimonials',
            'Long_Description'     => 'Long_Description',
            'Promo'     => 'Promo',
            'City_Main'     => 'City_Main',
            'Ciudades_de_cobertura'     => 'Ciudades_de_cobertura',
            'Horarios_de_atencion'     => 'Horarios_de_atencion',
            'Telephone_Main'     => 'Telephone_Main',
            'Metodos_de_pago'     => 'Metodos_de_pago',
            'Language'     => 'Language',
            'Comentarios_adicionales'     => 'Comentarios_adicionales',
        ];

        foreach ($results as $row) {
            $data []= [
                'ID_Interno'  => $row->ID_Interno,
                'Nombre'      => $row->Nombre,
                'Proyecto'    => $row->Proyecto,
    	        'Origen_Oportunidad'  => $row->Origen_Oportunidad,
                'Business_Partner'    => $row->Business_Partner,
                'Contacto'  => $row->Contacto,
                'Email'     => $row->Email,
                'Phone'     => $row->Phone,
                'Sales_Order_EnDigital'   => $row->Sales_Order_EnDigital,
                'Tipo_de_restriccion'     => $row->Tipo_de_restriccion,
                'Fecha_de_inicio'         => $row->Fecha_de_inicio,
                'Fecha_de_finalizacion'   => $row->Fecha_de_finalizacion,
                'Associated_SKU'          => $row->Associated_SKU,
                'Resource_Allocated'      => $row->Resource_Allocated,
                '1_Cambio_adicional'      => $row->Resource_Allocated,
                '3_Cambios_adicionales'   => $row->Resource_Allocated,
                'Google_my_business'      => $row->Google_my_business,
                'Paqueteanimes'           => $row->Paqueteanimes,
                'Supervisor_Asignado'     => $row->Supervisor_Asignado,
                'Correo_profesional'      => $row->Correo_profesional,
                'Video_anuncio'     => $row->Video_anuncio,
                'Pestaña_adicional' => $row->Pestaña_adicional,
                'Dominio'           => $row->Dominio,
                'Bloque_de_40_imgs_adicionales' => $row->Bloque_de_40_imgs_adicionales,
                'Alojamiento_por_anio'   => $row->Alojamiento_por_anio,
                'Mi_negocio_impreso'     => $row->Mi_negocio_impreso,
                'Facebook_Fanpage'       => $row->Facebook_Fanpage,
                'Toppings_Comentarios'   => $row->Toppings_Comentarios,
                'Change_is_because_of_a_mistake' => $row->Change_is_because_of_a_mistake,
                'Origen Oportunidad2'    => $row->Line_of_Business,
                'Line_of_Business'       => $row->Line_of_Business,
                'Business_Name'          => $row->Business_Name,
                'Slogan'                 => $row->Slogan,
                'Call_to_action'         => $row->Call_to_action,
                'E-mail_for_Contact_Form'  => $row->Products_and_Services,
                'Products_and_Services'    => $row->Products_and_Services,
                'Benefits'         => $row->Benefits,
                'Testimonials'     => $row->Testimonials,
                'Long_Description' => $row->Long_Description,
                'Promo'      => $row->Promo,
                'City_Main'  => $row->City_Main,
                'Ciudades_de_cobertura' => $row->Ciudades_de_cobertura,
                'Horarios_de_atencion'  => $row->Horarios_de_atencion,
                'Telephone_Main'     => $row->Telephone_Main,
                'Metodos_de_pago'    => $row->Metodos_de_pago,
                'Language'           => $row->Language,
                'Comentarios_adicionales' => $row->Comentarios_adicionales,
            ];
        }

        return $collection = collect($data);
    }
}
