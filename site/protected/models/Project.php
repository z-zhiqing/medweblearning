<?php

/**
 * This is the model class for table "{{project}}".
 *
 * The followings are the available columns in table '{{project}}':
 * @property integer $id
 * @property integer $creator_id
 * @property integer $create_time
 * @property integer $update_time
 * @property string $title
 * @property string $summary
 * @property string $facility
 * @property string $authors
 * @property string $authors_training_level
 * @property string $authors_training_affil
 * @property string $mentors
 */
class Project extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{project}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('creator_id, create_time, update_time, title, summary, facility, authors, authors_training_level, authors_training_affil', 'required'),
			array('creator_id, create_time, update_time', 'numerical', 'integerOnly'=>true),
			array('title, authors, mentors', 'length', 'max'=>256),
			array('summary', 'length', 'max'=>512),
			array('facility, authors_training_level, authors_training_affil', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, creator_id, create_time, update_time, title, summary, facility, authors, authors_training_level, authors_training_affil, mentors', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'creator_id' => 'Creator',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'title' => 'Title',
			'summary' => 'Summary',
			'facility' => 'Facility',
			'authors' => 'Authors',
			'authors_training_level' => 'Authors Training Level',
			'authors_training_affil' => 'Authors Training Affil',
			'mentors' => 'Mentors',
		);
	}

	/**
	 * This is invoked before the record is saved.
	 * @return boolean whether the record should be saved.
	 */
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->create_time=$this->update_time=time();
				$this->creator_id=Yii::app()->user->id;
			}
			else
				$this->update_time=time();
			return true;
		}
		else
			return false;
	}

	/**
	 * This is invoked after the record is saved.
	 */
	protected function afterSave()
	{
		//$this->addImages( );
		parent::afterSave();
	}


// public function addImages( ) {
//     //If we have pending images
//     if( Yii::app( )->user->hasState( 'images' ) ) {
//         $userImages = Yii::app( )->user->getState( 'images' );
//         //Resolve the final path for our images
//         $path = Yii::app( )->getBasePath( )."/../images/uploads/{$this->id}/";
//         //Create the folder and give permissions if it doesnt exists
//         if( !is_dir( $path ) ) {
//             mkdir( $path );
//             chmod( $path, 0777 );
//         }
 
//         //Now lets create the corresponding models and move the files
//         foreach( $userImages as $image ) {
//             if( is_file( $image["path"] ) ) {
//                 if( rename( $image["path"], $path.$image["filename"] ) ) {
//                     chmod( $path.$image["filename"], 0777 );
//                     $img = new Image( );
//                     $img->size = $image["size"];
//                     $img->mime = $image["mime"];
//                     $img->name = $image["name"];
//                     $img->source = "/images/uploads/{$this->id}/".$image["filename"];
//                     $img->somemodel_id = $this->id;
//                     if( !$img->save( ) ) {
//                         //Its always good to log something
//                         Yii::log( "Could not save Image:\n".CVarDumper::dumpAsString( 
//                             $img->getErrors( ) ), CLogger::LEVEL_ERROR );
//                         //this exception will rollback the transaction
//                         throw new Exception( 'Could not save Image');
//                     }
//                 }
//             } else {
//                 //You can also throw an execption here to rollback the transaction
//                 Yii::log( $image["path"]." is not a file", CLogger::LEVEL_WARNING );
//             }
//         }
//         //Clear the user's session
//         Yii::app( )->user->setState( 'images', null );
//     }
// }
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('creator_id',$this->creator_id);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('summary',$this->summary,true);
		$criteria->compare('facility',$this->facility,true);
		$criteria->compare('authors',$this->authors,true);
		$criteria->compare('authors_training_level',$this->authors_training_level,true);
		$criteria->compare('authors_training_affil',$this->authors_training_affil,true);
		$criteria->compare('mentors',$this->mentors,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
