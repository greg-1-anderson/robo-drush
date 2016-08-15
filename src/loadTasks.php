<?php

namespace Boedah\Robo\Task\Drush;

trait loadTasks
{
    /**
     * Return services.
     */
    public static function getDrushServices()
    {
        return new SimpleServiceProvider(
            [
                'taskDrushStack' => DrushStack::class,
            ]
        );
    }

    /**
     * @param string $pathToDrush
     * @return DrushStack
     */
    protected function taskDrushStack($pathToDrush = 'drush')
    {
        return $this->task(__FUNCTION__, $pathToDrush);
    }
}
