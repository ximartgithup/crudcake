<?php
// codigo del archivo src/Controller/ReportesController.php 
// Debe ser en este Orden
declare(strict_types=1);
namespace App\Controller;
use Cake\ORM\TableRegistry;
/**
 * Categorias Controller
 *
 * @property \App\Model\Table\CategoriasTable $Categorias
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        
    }

    public function formulario()
    {
        $idcl='';
        $clientesTable =  TableRegistry::getTableLocator()->get('Clientes');
        //Liste los clientes
        $query_clientes = $clientesTable->find('list', [
            'keyField' => 'id',
            'valueField' => function ($row) {
               return ucwords($row['apellidos'].' '.$row['nombres']);
            }
        ]);
      $clientes_list=$query_clientes->toArray();
//--------------- si quiero cargar los vende dores-----------------------
    $vendedoresTable =  TableRegistry::getTableLocator()->get('Vendedor');
    $query_vendedores = $vendedoresTable->find('list', [
        'keyField' => 'id',
        'valueField' => function ($row) {
            return ucwords($row['apellidos'].' '.$row['nombres']);
        }
    ]);
    //obtiene los vendedores como un array
    $vendedores_list=$query_vendedores->toArray();
//------------------------------------------------------------------------
       
        //para verlo en la vista como $clientes_list
        $this->set(compact('clientes_list','vendedores_list'));
        //----------Si viene enviado del formulario
        if($this->request->is('post'))
        {
            $idcl=$this->request->getData('cliente');//obtiene el id
            //echo "Cliente recibido: ".$idcl.'<br>';
            if($idcl!="")
            {
                $cliente=$clientesTable->find()->where(['id'=>$idcl])->toArray();
                $facturas =  TableRegistry::getTableLocator()->get('facturas');
                $query_join = $facturas->find()
                ->join([
                    'clientes' => [
                        'table' => 'clientes',
                        'alias' => 'C',
                        'type' => 'INNER',
                        'conditions' => 'C.id = facturas.clientes_id',
                    ]
                ]);
                $data = $query_join->where(['C.id' => $idcl])->toArray();
                $this->set(compact('cliente', 'data', 'idcl'));
            }
        }
    }

 //--- tabla con html y pdf-------------
 public function listado()
    {
        require  ROOT . DS . 'vendor' . DS . 'tcpdf'. DS .'Pdf.php';
        $pdf= new \Pdf();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('unismon');
        $pdf->SetTitle('Informe de prueba');
        $pdf->SetSubject('Informe general');
        $pdf->SetKeywords('PDF, reportes');
        $pdf->SetMargins(10, 25.2, 10);
        $pdf->SetAutoPageBreak(TRUE, 13.4);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        // add a page
        $pdf->AddPage('P', 'LETTER');
        $pdf->SetFont('times', '', 12, '', true);
              
        $regtabla =  TableRegistry::getTableLocator()->get('Clientes')->find()->toArray();//select * from clientes
        $html='
         <table cellspacing="0" cellpadding="1" border="1">
         <tr>
          <th> Nombres </th>
          <th> Telefono </th>
          <th> Correo </th>
         </tr>
         ';
        
        foreach($regtabla  as $reg)
        {
           $html.='
           <tr>
             <td> '.$reg->nombres.' '.$reg->apellidos.'</td>
             <td> '.$reg->telefono.'</td>
             <td> '.$reg->email.'</td>
            </tr>'; 
        }
       $html.='</table>';
       $pdf->writeHTML($html, true, false, true, false, '');
       $pdf->lastPage();
 	   ob_end_clean();//limpia el bufer
    $pdf->Output('Listado_clientes.pdf', 'I');
 }
}

