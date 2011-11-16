<?php


/**
 * This class defines the structure of the 'score' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/06/11 12:37:23
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ScoreTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ScoreTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('score');
		$this->setPhpName('Score');
		$this->setClassname('Score');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, 20, null);
		$this->addForeignKey('USER_ID', 'UserId', 'BIGINT', 'sf_guard_user', 'ID', true, 20, null);
		$this->addForeignKey('MODEL_ID', 'ModelId', 'BIGINT', 'model', 'ID', true, 20, null);
		$this->addColumn('OVERALL', 'Overall', 'DOUBLE', false, null, null);
		$this->addColumn('DESIGN', 'Design', 'DOUBLE', false, null, null);
		$this->addColumn('FEATURES', 'Features', 'DOUBLE', false, null, null);
		$this->addColumn('PERFORMANCE', 'Performance', 'DOUBLE', false, null, null);
		$this->addColumn('BATTERY', 'Battery', 'DOUBLE', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', true, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('sfGuardUser', 'sfGuardUser', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Model', 'Model', RelationMap::MANY_TO_ONE, array('model_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Model', 'Model', RelationMap::ONE_TO_MANY, array('id' => 'score_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // ScoreTableMap