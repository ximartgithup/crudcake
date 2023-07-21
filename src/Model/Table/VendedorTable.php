<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendedor Model
 *
 * @property \App\Model\Table\FacturasTable&\Cake\ORM\Association\HasMany $Facturas
 *
 * @method \App\Model\Entity\Vendedor newEmptyEntity()
 * @method \App\Model\Entity\Vendedor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vendedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VendedorTable extends Table
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

        $this->setTable('vendedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Facturas', [
            'foreignKey' => 'vendedor_id',
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
            ->scalar('nombres')
            ->maxLength('nombres', 25)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 25)
            ->requirePresence('apellidos', 'create')
            ->notEmptyString('apellidos');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 50)
            ->requirePresence('direccion', 'create')
            ->notEmptyString('direccion');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 20)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->numeric('salario')
            ->requirePresence('salario', 'create')
            ->notEmptyString('salario');

        return $validator;
    }
}
