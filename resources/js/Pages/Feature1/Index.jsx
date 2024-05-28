import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import TextInput from "@/Components/TextInput";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm } from "@inertiajs/react";
import Feature from "@/Components/Feature";

export default function Index({ feature, answer }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        number1: "",
        number2: "",
    });

    const submit = (e) => {
        e.preventDefault();

        post(route("feature1.calculate"), {
            onSuccess() {
                reset();
            },
        });
    };

    return (
        <Feature feature={feature} answer={answer}>
            <form className="p-8 grid grid-cols-2 gap-3" onSubmit={submit}>
                <InputLabel htmlFor="number1" value="Number 1" />
                <TextInput
                    id="number1"
                    className="mt-1 block w-full"
                    value={data.number1}
                    onChange={(e) => setData("number1", e.target.value)}
                    required
                    isFocused
                    autoComplete="number1"
                />
                <InputError error={errors.number1} />

                <InputLabel htmlFor="number2" value="Number 2" />
                <TextInput
                    id="number2"
                    className="mt-1 block w-full"
                    value={data.number2}
                    onChange={(e) => setData("number2", e.target.value)}
                    required
                    isFocused
                    autoComplete="number2"
                />
                <InputError error={errors.number2} />
            </form>
        </Feature>
    );
}
