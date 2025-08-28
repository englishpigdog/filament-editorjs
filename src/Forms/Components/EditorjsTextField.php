<?php

namespace Athphane\FilamentEditorjs\Forms\Components;

use Athphane\FilamentEditorjs\Forms\Concerns\HasHeight;
use Athphane\FilamentEditorjs\Forms\Concerns\HasTools;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasPlaceholder;
use Athphane\FilamentEditorjs\Forms\Concerns\HasImageUploadEndpoints;
use Filament\Forms\Components\Concerns\HasFileAttachments;

class EditorjsTextField extends Field
{
    use HasHeight;
    use HasPlaceholder;
    use HasTools;
    use HasFileAttachments; //v4
    use HasImageUploadEndpoints;

    protected string $view = 'filament-editorjs::components.editorjs-text-field';

    public static function make(?string $name = null): static
    {
        $instance = parent::make($name);

        // Setup Default Tools from Config
        $instance = $instance->setDefaultTools()
            ->setDefaultUploadUrl();

        return $instance;
    }
}
