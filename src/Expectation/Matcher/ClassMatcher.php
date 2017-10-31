<?php

namespace PHPKitchen\CodeSpecsCore\Expectation\Matcher;

use PHPKitchen\CodeSpecsCore\Expectation\Matcher\Base\Matcher;

/**
 * ClassMatcher is designed to check given class matches expectation.
 *
 * @package PHPKitchen\CodeSpecsCore\Expectation
 * @author Dmitry Kolodko <prowwid@gmail.com>
 */
class ClassMatcher extends Matcher {
    public function isExist(): self {
        $this->startStep('is exist')->assertClassExists();
        return $this;
    }

    public function isNotExist(): self {
        $this->startStep('is not exist')->assertClassDoesNotExist();
        return $this;
    }

    public function isInterface(): self {
        $this->startStep('is interface')->assertClassIsInterface();
        return $this;
    }

    public function isNotInterface(): self {
        $this->startStep('is not interface')->assertClassIsNotInterface();
        return $this;
    }

    public function hasStaticAttribute($attribute): self {
        $this->startStep("has static attribute \"{$attribute}\"")->assertClassHasStaticAttribute($attribute);
        return $this;
    }

    public function doesNotHaveStaticAttribute($attribute): self {
        $this->startStep("does not have static attribute \"{$attribute}\"")
            ->assertClassNotHasStaticAttribute($attribute);
        return $this;
    }

    public function hasAttribute($attribute): self {
        $this->startStep("has attribute \"{$attribute }\"")->assertClassHasAttribute($attribute);
        return $this;
    }

    public function doesNotHaveAttribute($attribute): self {
        $this->startStep("does not have attribute \"{$attribute}\"")->assertClassNotHasAttribute($attribute);
        return $this;
    }
}