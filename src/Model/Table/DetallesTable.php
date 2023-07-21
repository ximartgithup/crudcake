<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detalles Model
 *
 * @property \App\Model\Table\FacturasTable&\Cake\ORM\Association\BelongsTo $Facturas
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\BelongsTo $Productos
 *
 * @method \App\Model\Entity\Detalle newEmptyEntity()
 * @method \App\Model\Entity\Detalle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Detalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Detalle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Detalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Detalle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detalle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Detalle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Detalle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Detalle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Detalle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Detalle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DetallesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('detalles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Facturas', [
            'foreignKey' => 'facturas_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Productos', [
            'foreignKey' => 'productos_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('facturas_id')
            ->notEmptyString('facturas_id');

        $validator
            ->integer('productos_id')
            ->notEmptyString('productos_id');

        $validator
            ->numeric('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->integer('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmptyString('cantidad');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('facturas_id', 'Facturas'), ['errorField' => 'facturas_id']);
        $rules->add($rules->existsIn('productos_id', 'Productos'), ['errorField' => 'productos_id']);

        return $rules;
    }
}
