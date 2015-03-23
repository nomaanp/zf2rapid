<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link      https://github.com/ZFrapid/zf2rapid
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace ZF2rapid\Task\DeleteFactory;

/**
 * Class DeleteValidatorFactory
 *
 * @package ZF2rapid\Task\DeleteFactory
 */
class DeleteValidatorFactory extends AbstractDeleteFactory
{
    /**
     * Process the command
     *
     * @return integer
     */
    public function processCommandTask()
    {
        $result = $this->deleteFactory(
            $this->params->validatorDir,
            $this->params->paramValidator,
            'validator'
        );

        return $result == true ? 0 : 1;
    }
}