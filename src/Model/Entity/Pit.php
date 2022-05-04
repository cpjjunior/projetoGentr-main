<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pit Entity
 *
 * @property int $id
 * @property string $caminho
 * @property string $ano
 * @property string|null $ativo
 * @property string|null $semestre
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $archive_id
 * @property int $employee_id
 * @property string|null $data
 *
 * @property \App\Model\Entity\Archive $archive
 * @property \App\Model\Entity\Employee $employee
 */
class Pit extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'caminho' => true,
        'ano' => true,
        'ativo' => true,
        'semestre' => true,
        'created' => true,
        'modified' => true,
        'archive_id' => true,
        'employee_id' => true,
        'data' => true,
        'archive' => true,
        'employee' => true,
    ];
}
